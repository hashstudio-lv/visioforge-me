<?php

namespace App\Domain\Payments\Domain;

use App\Domain\Payments\Domain\Services\PaymentServiceInterface;
use App\Enums\DepositStatus;
use App\Models\Deposit;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FystPaymentService implements PaymentServiceInterface
{
    private string $merchantId;
    private string $apiKey;
    private string $apiBaseUrl;

    public function __construct()
    {
        $this->merchantId = config('services.fyst.merchant_id');
        $this->apiKey = config('services.fyst.api_key');
        $this->apiBaseUrl = config('services.fyst.base_url');
    }

    public function processPayment(float $amount, string $currency, array $paymentDetails, array $customerDetails): array
    {
        $payload = $this->buildPaymentPayload($amount, $currency, $paymentDetails, $customerDetails);

        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'Content-Type' => 'application/json',
            ])->post("{$this->apiBaseUrl}/sale-transactions", $payload);

            return $response->successful()
                ? $response->json()
                : $this->buildErrorResponse($response->json());
        } catch (\Exception $e) {
            return $this->buildErrorResponse(['message' => $e->getMessage()]);
        }
    }

    public function generateUrlForPayment(Deposit $deposit): array
    {
        return [false];
        Log::debug("Initiating balance top-up", [$deposit->toArray()]);

        $payload = $this->buildUrlPayload($deposit);

        try {
            $response = Http::withHeaders(['Content-Type' => 'application/x-www-form-urlencoded'])
                ->asForm()
                ->post("{$this->apiBaseUrl}/sale-form/{$this->merchantId}", $payload);

            Log::debug("Payment response", ['status' => $response->status(), 'body' => $response->body()]);

            if ($response->failed()) {
                Log::error("Payment request failed", ['status' => $response->status(), 'body' => $response->body()]);
                throw new \Exception("Payment request failed: {$response->body()}");
            }

            $data = [];
            parse_str($response->body(), $data);
            return $data;
        } catch (\Exception $e) {
            Log::error("Error generating payment URL", ['error' => $e->getMessage()]);
            throw $e;
        }
    }

    public function handlePaymentResponse(Deposit $deposit, array $data): bool
    {
        $deposit->update(['status' => DepositStatus::from($data['status'])]);
        Log::debug("Payment callback processed", ['data' => $data]);
        return true;
    }

    private function buildPaymentPayload(float $amount, string $currency, array $paymentDetails, array $customerDetails): array
    {
        return [
            'merchant_id' => $this->merchantId,
            'amount' => $amount,
            'currency' => $currency,
            'payment_method' => [
                'type' => 'card',
                'card' => [
                    'number' => $paymentDetails['card_number'],
                    'expiry_month' => $paymentDetails['expiry_month'],
                    'expiry_year' => $paymentDetails['expiry_year'],
                    'cvv' => $paymentDetails['cvv'],
                ],
            ],
            'customer' => [
                'id' => $customerDetails['id'],
                'email' => $customerDetails['email'],
                'first_name' => $customerDetails['first_name'],
                'last_name' => $customerDetails['last_name'],
            ],
            'return_urls' => [
                'success_url' => $customerDetails['success_url'],
                'fail_url' => $customerDetails['fail_url'],
            ],
        ];
    }

    private function buildUrlPayload(Deposit $deposit): array
    {
        $clientOrderId = (string) Str::uuid();
        $amount = (int) (floatval($deposit->amount) * 100);
        $controlData = "{$this->merchantId}{$clientOrderId}{$amount}{$deposit->email}{$this->apiKey}";
        $controlKey = sha1($controlData);

        return [
            'client_orderid' => $clientOrderId,
            'order_desc' => "Top-up for {$deposit->email}",
            'first_name' => $deposit->first_name,
            'last_name' => $deposit->last_name,
            'address1' => $deposit->address,
            'city' => $deposit->city,
            'zip_code' => $deposit->zip,
            'country' => $deposit->country,
            'phone' => $deposit->phone,
            'amount' => $deposit->amount,
            'email' => $deposit->email,
            'currency' => 'EUR',
            'ipaddress' => request()->getClientIp(),
            'site_url' => config('app.url'),
            'redirect_url' => config('services.fyst.redirect_url'),
            'server_callback_url' => config('services.fyst.server_callback_url'),
            'control' => $controlKey,
        ];
    }

    private function buildErrorResponse(array $details): array
    {
        return [
            'error' => true,
            'message' => 'Payment processing failed',
            'details' => $details,
        ];
    }
}

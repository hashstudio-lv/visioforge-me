<?php

namespace App\Domain\Payments\Domain;

use App\Domain\Payments\Domain\Services\PaymentServiceInterface;
use App\Enums\DepositStatus;
use App\Models\Deposit;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DectaPaymentService implements PaymentServiceInterface
{
    private string $apiKey;
    private string $apiBaseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.decta.api_key');
        $this->apiBaseUrl = config('services.decta.base_url');
    }

    public function processPayment(
        float $amount,
        string $currency,
        array $paymentDetails,
        array $customerDetails
    ): array {
        // Placeholder for direct payment processing (to be implemented later if needed)
        return [];
    }

    public function generateUrlForPayment(Deposit $deposit): array
    {
        Log::debug("Initiating DECTA payment order creation", [$deposit->toArray()]);

        $payload = $this->buildPaymentOrderPayload($deposit);

        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])->post("{$this->apiBaseUrl}/orders/", $payload);

            Log::debug("DECTA API response", [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            if ($response->failed()) {
                Log::error("DECTA order creation failed", [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                throw new \Exception("Failed to create DECTA payment order: {$response->body()}");
            }

            $data = $response->json();

            return [
                'order_id' => $data['id'] ?? null,
                'checkout_url' => $data['full_page_checkout'] ?? null,
                'status' => DepositStatus::PENDING
            ];
        } catch (\Exception $e) {
            Log::error("Error generating DECTA payment URL", ['error' => $e->getMessage()]);
            throw $e;
        }
    }

    public function handlePaymentResponse(Deposit $deposit, array $data): bool
    {
        // Placeholder for handling webhook/callback (to be implemented later)
        return false;
    }

    private function buildPaymentOrderPayload(Deposit $deposit): array
    {
        return [
            'client' => [
                'email' => $deposit->user->email,
            ],
            'products' => [
                [
                    'price' => ceil($deposit->amount_by_currency_exchange_rate * 100) / 100,
                    'title' => "Deposit {$deposit->id}",
                ]
            ],
            'currency' => $deposit->currency,
            'success_redirect' => config('services.decta.success_redirect'),
        ];
    }
}

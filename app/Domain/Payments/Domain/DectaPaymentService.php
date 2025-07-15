<?php

namespace App\Domain\Payments\Domain;

use App\Domain\Payments\Domain\Services\PaymentServiceInterface;
use App\Enums\DepositStatus;
use App\Http\Requests\GooglePayValidationRequest;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response;

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

    public function createOrderForGooglePay(Deposit $deposit): array
    {
        try {
            $order = $this->buildPaymentOrderPayloadForGooglePay($deposit);

            $response = Http::withToken($this->apiKey)
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ])
                ->post("$this->apiBaseUrl/orders/", $order);

            if ($response->failed()) {
                throw new \Exception("Failed to create google pay DECTA payment order: {$response->body()}");
            }

            $data = $response->json();

        }catch (\Exception $e) {
            Log::error("Error generating DECTA payment URL", ['error' => $e->getMessage()]);
            throw $e;
        }

        return [
            'order_id' => $data['id'] ?? null,
            'api_do_googlepay' => $data['api_do_googlepay'] ?? null,
        ];
    }

    public function paymentOrderForGooglePay(array $paymentData, GooglePayValidationRequest $request, array $orderResponse): Response
    {
        try {
            $tokenData = json_decode(
                $paymentData['paymentMethodData']['tokenizationData']['token'],
                true,
                512,
                JSON_THROW_ON_ERROR
            );

            $googlePayData = [
                'signature' => $tokenData['signature'],
                'intermediateSigningKey' => [
                    'signedKey' => $tokenData['intermediateSigningKey']['signedKey'],
                    'signatures' => $tokenData['intermediateSigningKey']['signatures']
                ],
                'protocolVersion' => $tokenData['protocolVersion'],
                'signedMessage' => $tokenData['signedMessage'],
                'ip_address' => $request->ip(),
            ];

            $response = Http::withToken($this->apiKey)
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ])
                ->post($orderResponse['api_do_googlepay'], $googlePayData);
        } catch (\Exception $e) {
            Log::error("Error generating DECTA payment URL", ['error' => $e->getMessage()]);
            throw $e;
        }

        return $response;
    }

    public function handlePaymentResponse(Deposit $deposit, array $data): bool
    {
        // Placeholder for handling webhook/callback (to be implemented later)
        return false;
    }

    public function setWebhooks(): void
    {
        $response = Http::withToken($this->apiKey)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])->post($this->apiBaseUrl.'/webhooks/', [
                'title' => 'My Payment Webhook',
                'version' => 'v0.6',
                'url' => 'https://video-creator.pro/en/dashboard/deposits/data-webhook',
                'is_test' => false,
                'all_events' => false,
                'events' => [
                    'order.payment_success',
                ],
            ]);

        if (!$response->successful()) {
            Log::error("Error setting DECTA payment webhook", [
                'status' => $response->status(),
            ]);
            throw new \Exception("Failed to set DECTA payment webhook: {$response->body()}");
        }
    }

    public function handlerWebhooks(Request $request): void
    {
        Log::info('DECTA Webhook:', $request->all());

        Deposit::where('merchant_order_id', $request->input('id'))
            ->update(['status' => DepositStatus::APPROVED]);
    }

    private function getDectaPaymentAmountAndCurrency(Deposit $deposit): array
    {
        $currency = strtoupper($deposit->currency);
        if ($currency !== 'EUR' && $currency !== 'USD') {
            $amountEur = ceil(($deposit->amount * $deposit->exchange_rate) * 100) / 100;
            return [$amountEur, 'EUR'];
        } else {
            $amount = ceil($deposit->amount * 100) / 100;
            return [$amount, $currency];
        }
    }

    private function buildPaymentOrderPayload(Deposit $deposit): array
    {
        [$payloadAmount, $payloadCurrency] = $this->getDectaPaymentAmountAndCurrency($deposit);
        return [
            'client' => [
                'email' => $deposit->user->email,
            ],
            'products' => [
                [
                    'price' => $payloadAmount,
                    'title' => "Deposit {$deposit->id}",
                ]
            ],
            'currency' => $payloadCurrency,
            'success_redirect' => config('services.decta.success_redirect'),
        ];
    }

    private function buildPaymentOrderPayloadForGooglePay(Deposit $deposit): array
    {
        [$payloadAmount, $payloadCurrency] = $this->getDectaPaymentAmountAndCurrency($deposit);
        return [
            'client' => [
                'email' => $deposit->user->email,
            ],
            'products' => [
                [
                    'quantity' => '1',
                    'price' => $payloadAmount,
                    'title' => "Deposit {$deposit->id}",
                ],
            ],
            'currency' => $payloadCurrency,
            'success_redirect' => config('services.decta.success_redirect'),
        ];
    }
}

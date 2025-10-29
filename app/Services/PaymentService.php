<?php

namespace App\Services;

use App\Enums\DepositStatus;
use App\Models\Deposit;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PaymentService
{
    protected $merchantId;

    protected $apiKey;

    protected $apiBaseUrl;

    public function __construct()
    {
        $this->merchantId = config('services.fyst.merchant_id'); // Fetch from config
        $this->apiKey = config('services.fyst.api_key'); // Fetch from config
        $this->apiBaseUrl = config('services.fyst.base_url'); // Fetch from config
    }

    public function processPayment($amount, $currency, $paymentDetails, $customerDetails)
    {
        // Prepare the request body as per the FYST API documentation
        $payload = [
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

        // Make the API call
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->apiBaseUrl}/sale-transactions", $payload);

        if ($response->successful()) {
            return $response->json(); // Handle success
        }

        return [
            'error' => true,
            'message' => 'Payment processing failed',
            'details' => $response->json(),
        ];
    }

    public function generateUrlForPayment(Deposit $deposit)
    {
        Log::debug('Initiating balance top-up', [$deposit->toArray()]);

        $endpointId = config('services.fyst.merchant_id');
        $clientOrderId = (string) Str::uuid();
        $amount = (int) (floatval($deposit->amount) * 100);
        $merchantControl = config('services.fyst.api_key');
        $controlData = "{$endpointId}{$clientOrderId}{$amount}{$deposit->email}{$merchantControl}";
        $controlKey = sha1($controlData);

        $payload = [
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

        Log::debug('Sending payment request', [$payload]);

        // Send request
        $response = Http::withHeaders(['Content-Type' => 'application/x-www-form-urlencoded'])
            ->asForm()
            ->post(config('services.fyst.base_url')."/sale-form/{$endpointId}", $payload);

        Log::debug("Payment response status: {$response->status()}");
        Log::debug("Payment response content: {$response->body()}");

        if ($response->failed()) {
            Log::error("Payment request failed with status: {$response->status()}, content: {$response->body()}");
            throw new \Exception("Payment request failed: {$response->body()}", $response->status());
        }

        $data = [];
        parse_str($response->body(), $data);

        return $data;
        //        return $this->handlePaymentResponse($paymentData, $deposit);
    }

    public function handlePaymentResponse(Deposit $deposit, array $data)
    {
        $deposit->update([
            'status' => DepositStatus::from($data['status']),
        ]);

        Log::debug('Balance top-up callback', [
            'data' => $data,
        ]);

        return true;
    }
}

<?php

namespace App\Domain\Payments\Domain\Services;

use App\Models\Deposit;

interface PaymentServiceInterface
{
    public function processPayment(float $amount, string $currency, array $paymentDetails, array $customerDetails): array;
    public function generateUrlForPayment(Deposit $deposit): array;
    public function handlePaymentResponse(Deposit $deposit, array $data): bool;
}

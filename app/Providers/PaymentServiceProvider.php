<?php

namespace App\Providers;

use App\Domain\Payments\Domain\DectaPaymentService;
use App\Domain\Payments\Domain\Enums\PaymentProvider;
use App\Domain\Payments\Domain\FystPaymentService;
use App\Domain\Payments\Domain\Services\PaymentServiceInterface;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PaymentServiceInterface::class, function ($app) {
            $gateway = config('services.payment_gateway', PaymentProvider::FYST);

            return match ($gateway) {
                PaymentProvider::DECTA->value => $app->make(DectaPaymentService::class),
                PaymentProvider::FYST->value => $app->make(FystPaymentService::class),
                default => $app->make(FystPaymentService::class),
            };
        });
    }
}

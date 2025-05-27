<?php

namespace App\Http\Controllers;

use App\Domain\ExchangeRate\Services\ExchangeRateService;
use App\Domain\Payments\Domain\Services\PaymentServiceInterface;
use App\Enums\DepositStatus;
use App\Http\Requests\StoreDepositRequest;
use App\Models\Country;
use App\Models\Deposit;

class DepositController extends Controller
{
    public function create(ExchangeRateService $exchangeRateService)
    {
        $user = auth()->user();

        $countries = Country::whereIn('country_code', [
            'AU', 'AT', 'BE', 'CA', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IS', 'IE', 'IL', 'IT', 'JP',
            'LV', 'LT', 'LU', 'MT', 'NL', 'NZ', 'NO', 'PL', 'PT', 'RO', 'SG', 'SK', 'KR', 'ES', 'SE', 'CH'
        ])->get();

        $currency = 'EUR';
        $exchangeRatioToART = 1;

        if (request()->get('currency') == 'USD') {
            $currency = 'USD';
            $exchangeRatioToART = $exchangeRateService->getExchangeRate('EUR', 'USD');
        }


        return view('pages.deposits.create', [
            'user' => $user,
            'countries' => $countries,
            'currency' => $currency,
            'exchangeRatioToART' => $exchangeRatioToART,
            'deposit' => $user->deposits()->latest()->first()
        ]);
    }

    public function store(StoreDepositRequest $request, PaymentServiceInterface $paymentService, ExchangeRateService $exchangeRateService)
    {
        $currency = 'EUR';
        $exchangeRatioToART = 1;

        if (request()->get('currency') == 'USD') {
            $currency = 'USD';
            $exchangeRatioToART = $exchangeRateService->getExchangeRate('EUR', 'USD');
        }

        $user = auth()->user();
        $data = $request->validated();
        $data['status'] = DepositStatus::PENDING;
        $data['exchange_rate'] = $exchangeRatioToART;
        $data['currency'] = $currency;

        $deposit = new Deposit($data);

        $user->deposits()->save($deposit);
        $data = $paymentService->generateUrlForPayment($deposit);

        $deposit->update([
            'merchant_order_id' => $data['order_id'],
        ]);

        return redirect($data['checkout_url']);
    }

    public function index()
    {
        $user = auth()->user();

        return view('pages.deposits.index', [
            'user' => $user,
            'deposits' => $user->deposits
        ]);
    }
}

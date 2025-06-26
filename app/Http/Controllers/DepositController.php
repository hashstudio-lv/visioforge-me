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
        if (request()->get('apple-pay')) {
            $client = new Client([
                'base_uri' => 'https://apple-pay-gateway.apple.com',
                'expect' => false,
            ]);

            $response = $client->post('/paymentservices/paymentSession', [
                'cert' => [storage_path('certs/merchant_id_fullchain.pem'), ''],
                'ssl_key' => [storage_path('certs/apple_pay_identity.key'), ''],
                'json' => [
                    'merchantIdentifier' => 'merchant.pro.videocreator',
                    'displayName' => 'Video Creator',
                    'initiative' => 'web',
                    'initiativeContext' => 'video-creator.pro',
                ]
            ]);

           // dd($response->getBody()->getContents());
        }

        $user = auth()->user();

        $countries = Country::whereIn('country_code', [
            'AU', 'AT', 'BE', 'CA', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IS', 'IE', 'IL', 'IT',
            'JP',
            'LV', 'LT', 'LU', 'MT', 'NL', 'NZ', 'NO', 'PL', 'PT', 'RO', 'SG', 'SK', 'KR', 'ES', 'SE', 'CH'
        ])->get();

        $currenciesRate = config('currencies.currencies_rates');
        $isCurrenciesFromConfig = config('currencies.options.from_config');
        $currenciesList = array_keys($currenciesRate);
        $tokenPriceEUR = $currenciesRate['EUR']['one_token_price'];

        $currentCurrency = request()->get('currency', 'EUR');

        if (! in_array($currentCurrency, $currenciesList)) {
            abort(400);
        }

        $exchangeRatioToART = 1;

        if (! $isCurrenciesFromConfig) {
            if ($currentCurrency !== 'EUR') {
                $exchangeRatioToART = $exchangeRateService->getExchangeRate('EUR', $currentCurrency);
            }
        }

        return view('pages.deposits.create', [
            'user' => $user,
            'countries' => $countries,
            'currentCurrency' => $currentCurrency,
            'exchangeRatioToART' => $exchangeRatioToART,
            'deposit' => $user->deposits()->latest()->first(),
            'currenciesRate' => $currenciesRate,
            'isCurrenciesFromConfig' => $isCurrenciesFromConfig,
            'currenciesList' => $currenciesList,
            'tokenPriceEUR' => $tokenPriceEUR,
        ]);
    }

    public function store(
        StoreDepositRequest $request,
        PaymentServiceInterface $paymentService,
        ExchangeRateService $exchangeRateService
    ) {
        $currenciesRate = config('currencies.currencies_rates');
        $isCurrenciesFromConfig = config('currencies.options.from_config');
        $currenciesList = array_keys($currenciesRate);

        $currentCurrency = request()->get('currency', 'EUR');

        if (! in_array($currentCurrency, $currenciesList)) {
            abort(400);
        }

        $exchangeRatioToART = 1;

        if (! $isCurrenciesFromConfig) {
            if ($currentCurrency !== 'EUR') {
                $exchangeRatioToART = $exchangeRateService->getExchangeRate('EUR', $currentCurrency);
            }
        }
        $user = auth()->user();
        $data = $request->validated();
        $data['status'] = DepositStatus::PENDING;
        $data['exchange_rate'] = $exchangeRatioToART;
        $data['currency'] = $currentCurrency;

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

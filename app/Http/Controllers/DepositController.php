<?php

namespace App\Http\Controllers;

use App\Domain\ExchangeRate\Services\ExchangeRateService;
use App\Domain\Payments\Domain\Services\PaymentServiceInterface;
use App\Enums\DepositStatus;
use App\Http\Requests\GooglePayValidationRequest;
use App\Http\Requests\StoreDepositRequest;
use App\Models\Country;
use App\Models\Deposit;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

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

    public function index()
    {
        $user = auth()->user();

        return view('pages.deposits.index', [
            'user' => $user,
            'deposits' => $user->deposits
        ]);
    }

    public function store(
        StoreDepositRequest $request,
        PaymentServiceInterface $paymentService,
        ExchangeRateService $exchangeRateService
    ) {
        $deposit = $this->prepareStore($request, $exchangeRateService);

        $data = $paymentService->generateUrlForPayment($deposit);

        $deposit->update([
            'merchant_order_id' => $data['order_id'],
        ]);

        return redirect($data['checkout_url']);
    }

    private function prepareStore(
        StoreDepositRequest $request,
        ExchangeRateService $exchangeRateService
    )
    {
        $currenciesRate = config('currencies.currencies_rates');
        $isCurrenciesFromConfig = config('currencies.options.from_config');
        $currenciesList = array_keys($currenciesRate);

        $currentCurrency = request()->get('currency', 'EUR');

        if (!in_array($currentCurrency, $currenciesList)) {
            abort(400);
        }

        $exchangeRatioToART = 1;

        if (!$isCurrenciesFromConfig) {
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

        return $deposit;
    }

    public function appleValidateMerchant(
        Request $request
    ) {
        $config = config('services.decta.apple_pay');

        $response = Http::withOptions([
            'cert' => [$config['cert_path'], $config['key_pass']],
            'ssl_key' => [$config['key_path'], $config['key_pass']],
            'headers' => ['Expect' => ''],
        ])->post('https://apple-pay-gateway.apple.com/paymentservices/paymentSession', [
            'merchantIdentifier' => $config['merchant_id'],
            'displayName' => $config['display_name'],
            'initiative' => 'web',
//            'initiativeContext' => $config['domain'],
        ]);

        return response()->json(json_decode($response->getBody(), true));
    }

    public function appleProcessPayment(
        Request $request
    ) {
        $payload = $request->input('token')['paymentData'];

        $response = Http::withToken(config('services.decta.token'))
            ->post('https://api.decta.com/payments/apple', [
                'paymentData' => $payload,
                'amount' => (int)($request->amount * 100),
                'currency' => $request->currency,
                'description' => 'Apple Pay Deposit',
            ]);

        return response()->json([
            'success' => $response->successful(),
            'redirect' => route('deposits.success'),
        ]);
    }

    public function validateGooglePayForm(GooglePayValidationRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
        ]);
    }

    public function googleProcessPayment(
        PaymentServiceInterface $paymentService,
        GooglePayValidationRequest $request,
        StoreDepositRequest $requestDeposit,
        ExchangeRateService $exchangeRateService): JsonResponse
    {
        $deposit = $this->prepareStore($requestDeposit, $exchangeRateService);

        $orderResponse = $paymentService->createOrderForGooglePay($deposit);
        $deposit->update([
            'merchant_order_id' => $orderResponse['order_id'],
        ]);

        $apiEndpoint = $orderResponse['api_do_googlepay'] ?? null;

        if (!$apiEndpoint) {
            return response()->json(['error' => 'Ошибка создания заказа' . $orderResponse], 500);
        }

        $paymentData = $request->input('paymentData');
        $response = $paymentService->paymentOrderForGooglePay($paymentData,$request,$orderResponse);

        return response()->json([
            'success' => $response->successful(),
            'data' => $response->json(),
            'redirect' => $response->successful() ? $response->json()['threed_check_url'] : null,
        ], $response->status());
    }

    public function success(): View
    {
        return view('pages.deposits.success');
    }

    public function setWebhooks(PaymentServiceInterface $paymentService): void
    {
        $paymentService->setWebhooks();
    }

    public function handlerWebhooks(Request $request, PaymentServiceInterface $paymentService): void
    {
        $paymentService->handlerWebhooks($request);
    }

    public function exactlyWebhooks(Request $request, PaymentServiceInterface $paymentService): void
    {
        Log::info('Exactly Webhook:', $request->all());

        Deposit::where('merchant_order_id', $request->input('id'))
            ->update(['status' => DepositStatus::APPROVED]);
    }
}

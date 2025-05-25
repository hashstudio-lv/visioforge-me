<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Services\PaymentService;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function __invoke(PaymentService $paymentService)
    {
        $request = request()->all();

        Log::debug("Balance top-up callback", [
            'data' => $request
        ]);

        $deposit = Deposit::where('merchant_order_id', $request['client_orderid'])->first();

        $paymentService->handlePaymentResponse($deposit, $request);
    }
}

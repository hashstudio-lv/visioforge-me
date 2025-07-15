<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::post('data-webhook', [\App\Http\Controllers\DepositController::class, 'handlerWebhooks']);
    Route::post('exactly-webhook', [\App\Http\Controllers\DepositController::class, 'exactlyWebhooks']);
});

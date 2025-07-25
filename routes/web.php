<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name('home');
    Route::any('/payments', \App\Http\Controllers\PaymentController::class);

    Route::middleware('auth')->group(function () {
        Route::any('/products/{slug}/purchase', [\App\Http\Controllers\ProductController::class, 'purchase'])->name('products.purchase');
//        Route::get('/products/generate', [ProductController::class, 'generate'])->name('products.generate');
    //    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard');
        Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/dashboard/deposits/set-webhook', [\App\Http\Controllers\DepositController::class, 'setWebhooks'])->name('deposits.setWebhooks');
        Route::get('/dashboard/deposits/success', [\App\Http\Controllers\DepositController::class, 'success'])->name('deposits.success');
        Route::any('/merchant/apple-pay/validate', [\App\Http\Controllers\DepositController::class, 'appleValidateMerchant'])->name('apple-pay.validate');
        Route::post('/merchant/apple-pay/process', [\App\Http\Controllers\DepositController::class, 'appleProcessPayment'])->name('apple-pay.process');
        Route::post('/merchant/google-pay/validate', [\App\Http\Controllers\DepositController::class, 'validateGooglePayForm'])->name('google-pay.validate');
        Route::post('/merchant/google-pay/process', [\App\Http\Controllers\DepositController::class, 'googleProcessPayment'])->name('google-pay.process');
        Route::post('/merchant/bancontact/process', [\App\Http\Controllers\DepositController::class, 'processBancontact'])->name('bancontact.process');
        Route::post('/merchant/blik/process', [\App\Http\Controllers\DepositController::class, 'processBlik'])->name('blik.process');
        Route::post('/merchant/ideal/process', [\App\Http\Controllers\DepositController::class, 'processIdeal'])->name('ideal.process');
        Route::post('/merchant/sofort/process', [\App\Http\Controllers\DepositController::class, 'processSofort'])->name('sofort.process');
        Route::post('/merchant/mbway/process', [\App\Http\Controllers\DepositController::class, 'processMbway'])->name('mbway.process');
        Route::post('/merchant/multibanco/process', [\App\Http\Controllers\DepositController::class, 'processMultibanco'])->name('multibanco.process');
        Route::get('/dashboard/deposits/create', [\App\Http\Controllers\DepositController::class, 'create'])->name('deposits.create');
        Route::get('/dashboard/deposits', [\App\Http\Controllers\DepositController::class, 'index'])->name('deposits.index');
        Route::post('/dashboard/deposits', [\App\Http\Controllers\DepositController::class, 'store'])->name('deposits.store');
        Route::post('/dashboard/orders/{uuid}', [\App\Http\Controllers\OrderController::class, 'download'])->name('orders.download');
        Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/emails/generate', [\App\Http\Controllers\OrderController::class, 'createEmail'])->name('orders.generate-email');
        Route::get('/agreements/generate', [\App\Http\Controllers\OrderController::class, 'createAgreement'])->name('orders.generate-agreement');
        Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard/{slug}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');
    });

    require __DIR__ . '/auth.php';

    Route::get('/emails', [\App\Http\Controllers\PageController::class, 'emails'])->name('pages.emails');
    Route::get('/agreements', [\App\Http\Controllers\PageController::class, 'agreements'])->name('pages.agreements');
//    Route::get('/images', [\App\Http\Controllers\PageController::class, 'imageLanding'])->name('pages.image-landing');
    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
//    Route::get('/image-generation', [\App\Http\Controllers\PageController::class, 'imageGeneration'])->name('pages.image-generation');
//    Route::get('/image-editing', [\App\Http\Controllers\PageController::class, 'imageEditing'])->name('pages.image-editing');
    Route::get('/{slug?}', [\App\Http\Controllers\PageController::class, 'show'])->name('pages.show');
});

<?php

namespace App\Services;

use App\Models\Deposit;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductService
{
    public function purchase($user, $product)
    {
        Order::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'price' => $product->price
        ]);
    }

    public function userAbleToPurchaseProduct($user, $product)
    {
        return true;
    }
}

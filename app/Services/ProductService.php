<?php

namespace App\Services;

use App\Models\Order;

class ProductService
{
    public function purchase($user, $product)
    {
        Order::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'price' => $product->price,
        ]);
    }

    public function userAbleToPurchaseProduct($user, $product)
    {
        return true;
    }
}

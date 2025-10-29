<?php

namespace App\Http\Controllers;

use App\Models\Order;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $orders = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();

        return view('pages.dashboard', [
            'user' => auth()->user(),
            'orders' => $orders,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;

class DashboardController extends Controller
{
    public function dashboard()
    {
//        $id = $imagineService->generateVideoFromText('walking dead');
//        $id = '574d006b-8c00-4a08-9cb5-6a0f8d2174bc';
//        $file = Storage::get('/IMG_0645.jpeg');
//        dd($file);
//        $id = $imagineService->generateVideoFromImage('walking dead');
//        $video = $imagineService->getVideoStatus($id);
//        dd($video);

        $orders = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();

        return view('themes.new.pages.dashboard', [
            'user' => auth()->user(),
            'orders' => $orders
        ]);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    public function orderHistory()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        $user = Auth::user();
        return view('shop.auth.orderhistory', compact('orders','user'));
    }
}

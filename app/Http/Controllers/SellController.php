<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SellController extends Controller
{
    public function baseic(Request $request)
    {
        $data = $request->post('arraya');
        foreach($data as $data) {
            Order::create([
                'email' => Auth::user()->email,
                'order_name' => $data,
            ]);
        }
        return redirect('/');
    }
    public function show(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $orders = $user->order->whereNull('order_weight');
        return view('/sell' , compact('orders'));
    }
    public function update(Request $request)
    {
        foreach($request->orders as $order) {
            Order::whereId($order)->update(['order_weight' => $request->get($order)]);
        }
        return redirect('/');
    }
}

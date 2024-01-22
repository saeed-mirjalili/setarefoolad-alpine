<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class SubmitOrderController extends Controller
{
    public function show(Request $request)
    {
        foreach($request->orders as $order) {
            Order::whereId($order)->update(['order_weight' => $request->get($order)]);
        }
        return redirect('/');
    }
}


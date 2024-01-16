<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitOrderController extends Controller
{
    public function show(Request $request)
    {
        $orderSub = $request->all();
        dd($orderSub);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\order;
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
                'order-name' => $data,
            ]);
        }

        return redirect('/');

        // return redirect('/')->with([
        //     'success' => true,
        //     'message' => 'Thank You!',
        // ]);
        // $requ = request()->post('arraya');
        // $reque = response()->json($requ);
        // return redirect('/sell')->with('data', $reque);
    }
    public function show(Request $request)
    {
        //
    }
}

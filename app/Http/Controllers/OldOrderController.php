<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OldOrderController extends Controller
{
    public function show(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $orders = $user->order
            ->whereNotNull('order_weight')
            ->groupBy('created_at');
            
        
        return view('/oldOrder' , compact('orders'));


        // $results = MyModel::select(DB::raw('DATE(created_at) AS created_date'), DB::raw('COUNT(*) AS count'))
        //         ->groupBy('created_date')
        //         ->orderBy('created_date', 'DESC')
        //         ->get();
    }
}

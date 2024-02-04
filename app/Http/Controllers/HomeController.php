<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function show(Request $request)
    {
        $products = Products::get();
        $articles = Articles::inRandomOrder()->take(4)->get();

        return view('home' , compact('products','articles'));
    }
}

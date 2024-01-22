<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\OldOrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('auth/google', [GoogleController::class, 'googlepage'])->name('googlepage');
Route::get('/auth/google/callback', [GoogleController::class, 'googlecallback'])->name('googlecallback');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/sell', [SellController::class, 'baseic']);
    Route::get('/sell', [SellController::class, 'show']);
    Route::post('/orderUpdate', [SellController::class, 'update'])->name('orders.update');
    Route::get('/oldOrder', [OldOrderController::class, 'show'])->name('order.old');

});

require __DIR__.'/auth.php';

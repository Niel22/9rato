<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaintenanceController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\BidsList;
use App\Livewire\BuyList;
use App\Livewire\Home;
use App\Livewire\ProductDetails\Bid;
use App\Livewire\ProductDetails\Buy;
use App\Livewire\ProductDetails\Rent;
use App\Livewire\ProductDetails\Swap;
use App\Livewire\ProductDetails\Trade;
use App\Livewire\RentList;
use App\Livewire\SwapList;
use App\Livewire\TradeList;
use App\Livewire\User\Dashboard;
use App\Livewire\User\Profile\Index;
use App\Livewire\User\Profile\Kyc;
use Illuminate\Support\Facades\Route;

Route::get('/', [MaintenanceController::class, 'coming'])->name('home');
Route::any('{any}', function () {
        return redirect()->route('home');
})->where('any', '.*');

Route::get('/product/bid', Bid::class)->name('product.bid');
Route::get('/product/buy', Buy::class)->name('product.buy');
Route::get('/product/swap', Swap::class)->name('product.swap');
Route::get('/product/trade', Trade::class)->name('product.trade');
Route::get('/product/rent', Rent::class)->name('product.rent');
Route::get('/all-bids', BidsList::class)->name('bids');
Route::get('/all-buys', BuyList::class)->name('buy');
Route::get('/all-swaps', SwapList::class)->name('swap');
Route::get('/all-trades', TradeList::class)->name('trade');
Route::get('/all-rents', RentList::class)->name('rent');


Route::group(['middleware' => 'guest'], function(){
    Route::get('/auth/login', Login::class)->name('login');
    Route::get('/auth/register', Register::class)->name('register');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/auth/verify-email', Verify::class)->name('auth.verify');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // User Dashboard
    Route::get('/dashboard', Dashboard::class)->name('user.dashboard');
    Route::get('/profile', Index::class)->name('user.profile.index');
    Route::get('/kyc-verification', Kyc::class)->name('user.profile.kyc');
});
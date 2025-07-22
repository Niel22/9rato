<?php

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
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
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

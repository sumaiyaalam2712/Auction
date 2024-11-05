<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\AuctionController;
use App\Http\Controllers\Web\Frontend\BidderProfileController;
use App\Http\Controllers\Web\Frontend\CarSingleController;
use App\Http\Controllers\Web\Frontend\CarBidController;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\LoginController;
use App\Http\Controllers\Web\Frontend\ProfileController;
use App\Http\Controllers\Web\Frontend\RegisterController;
use App\Http\Controllers\Web\Frontend\SellCarController;
use App\Http\Controllers\Web\Backend\CarController;
use App\Http\Controllers\Web\Backend\CardInformationController;



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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::view('/app-frontend','frontend.app');
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/bidder-profile',[BidderProfileController::class,'index'])->name('bidder_profile.index');
Route::get('/car-single',[CarSingleController::class,'index'])->name('car_single.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::get('/auction',[AuctionController::class,'index'])->name('auction.index');
Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
Route::get('/cars-and-bids',[CarBidController::class,'index'])->name('car_bid.index');
Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::get('/sell-car',[SellCarController::class,'index'])->name('sell_car.index');



Route::post('/sell-car',[CarController::class,'store'])->name('car.store');
Route::post('/card-information',[CardInformationController::class,'store'])->name('card.store');
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
use App\Http\Controllers\Web\Frontend\WriteReviewController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\UserController;
use App\Http\Controllers\Web\Backend\SearchController;
use App\Http\Controllers\Web\Backend\BidController;


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


Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/bidder-profile',[BidderProfileController::class,'index'])->name('bidder_profile.index');
Route::get('/car-single/{id}',[CarSingleController::class,'index'])->name('car_single.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::get('/auction',[AuctionController::class,'index'])->name('auction.index');
Route::get('/cars-and-bids',[CarBidController::class,'index'])->name('car_bid.index');
Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::get('/sell-car',[SellCarController::class,'index'])->name('sell_car.index');



Route::post('/searchCar',[SearchController::class,'searchCar'])->name('search.car');



Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
Route::post('/profile',[ProfileController::class,'store'])->name('profile.store');
Route::post('/profile-email',[ProfileController::class,'emailStore'])->name('profile.email.store');
Route::post('/profile-pic',[ProfileController::class,'picStore'])->name('profile.pic.store');
Route::post('/profile-card',[ProfileController::class,'cardStore'])->name('profile.card.store');


Route::get('/write-review',[WriteReviewController::class,'index'])->name('write_review.index');
Route::post('/write-review',[WriteReviewController::class,'store'])->name('write_review.store');






Route::post('/sell-car',[CarController::class,'store'])->name('car.store');
Route::post('/card-information',[CardInformationController::class,'store'])->name('card.store');
Route::post('/bid/{id}',[BidController::class,'store'])->name('bid.store');



Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('/dashboard/user',[UserController::class,'index'])->name('user.index');
Route::get('{id}/status',[UserController::class,'status'])->name('user.status');
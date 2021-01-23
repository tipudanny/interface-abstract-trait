<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'capcity'])->name('/');

Route::get('interface',[HomeController::class,'capcity']);
Route::get('abstract-auto-load',[HomeController::class,'methodWithDiclairation']);
Route::get('abstract',[HomeController::class,'display']);
Route::get('trait',[HomeController::class,'fouleAmount']);

//paypal Integration
Route::get('payment', [PayPalController::class, 'payWithpaypal'])->name('payment');
Route::get('payment/status', [PayPalController::class, 'getPaymentStatus'])->name('status');

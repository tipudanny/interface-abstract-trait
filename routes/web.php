<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'capcity']);

Route::get('interface',[HomeController::class,'capcity']);
Route::get('abstract-auto-load',[HomeController::class,'methodWithDiclairation']);
Route::get('abstract',[HomeController::class,'display']);
Route::get('trait',[HomeController::class,'fouleAmount']);

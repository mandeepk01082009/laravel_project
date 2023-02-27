<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
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

Route::get('/',function(){
    return view('layout.index'); 
});
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class, 'register']);
Route::get('/customer',function(){
	$customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer',[CustomerController::class, 'view']);
Route::post('/customer',[CustomerController::class, 'store']);


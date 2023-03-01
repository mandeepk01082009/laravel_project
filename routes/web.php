<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController; 
use Illuminate\Http\Request;
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
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.force-delete');
Route::get('/customer/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer',[CustomerController::class, 'view']);
Route::get('/customer/trash',[CustomerController::class, 'trash']);
Route::post('/customer',[CustomerController::class, 'store']); 
Route::get('get-all-session', function(){
    $session = session()->all();
    p($session);
});

Route::get('set-session', function(Request $request){
    $request->session()->put('name', 'User');
    $request->session()->put('user_id', '123');
    $request->session()->flash('status', 'Success');
    return redirect('get-all-session');

});

Route::get('destroy-session', function(){
    session()->forget(['name', 'user_id']);
    // session()->forget('user_id');
    return redirect('get-all-session');
});


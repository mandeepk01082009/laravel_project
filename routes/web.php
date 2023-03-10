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
// ----------------------------------------
Route::group(['prefix' => '/customer'], function (){
Route::get('create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.force-delete');
Route::get('restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/',[CustomerController::class, 'view']);
Route::get('/trash',[CustomerController::class, 'trash']);
Route::post('/',[CustomerController::class, 'store']);
}); 
//-------------------------------------------

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


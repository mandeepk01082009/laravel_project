<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/profile', function(){
    return "Welcome to your profile";
});
Route::get('/login', function(){
    session()->put('user_id', 1);
    return redirect('/');
});
Route::get('/logout', function(){
    session()->forget('user_id');
    return redirect('/');
});
Route::get('/no-access', function() {
    echo "You 're not allowed to access the page";
    die;
});

Route::get('/', function () {
    return view('welcome');

});

Route::middleware(['guard'])->group(function(){
    //Protected
Route::get('/data', [IndexController::class,'index']);
Route::get('/group', [IndexController::class,'group']);


});


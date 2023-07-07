<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.mylogin');
})->middleware('guest');

Route::get('/admin', function () {
    return view('auth.mylogin');
})->middleware('guest');

Route::view('/testhome','home');

Auth::routes(['verfiy' => true]);
// Auth::routes(['verfiy' => true]);

Route::group(['middleware'=>['auth','isAdmin','verified'] ],function () {

});


Route::group(['middleware'=>['auth','isCustomer','verified'] ],function () {

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


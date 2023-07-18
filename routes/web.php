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

Route::get('/admin', function () {
    return view('auth.mylogin');
})->middleware('guest');


Route::view('/testhome','home');
Route::view('/','externalLayout.home');
Route::view('about','external.about');
Route::view('shop','external.shop');
Route::view('checkout','external.checkout');
Route::view('contact','external.contact');


Auth::routes(['verfiy' => true]);


Route::group(['middleware'=>['auth','verified','twoFA'] ],function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//roles and permission
Route::resource('role',App\Http\Controllers\RoleController::class);
Route::resource('permission',App\Http\Controllers\PermissionController::class);

Route::resource('order',App\Http\Controllers\OrderController::class);

//admin
Route::get('admin-list', [App\Http\Controllers\AdminUserController::class, 'getAdmin']);
Route::post('add-admin', [App\Http\Controllers\AdminUserController::class, 'addAdmin'])->name('user.store');
Route::put('update-admin/{id}', [App\Http\Controllers\AdminUserController::class, 'updateAdmin'])->name('user.update');

});


Route::get('/verifyOtp',[App\Http\Controllers\VerifyOTPController::class, 'showVerifyForm']);
Route::post('/verifyOTP',[App\Http\Controllers\VerifyOTPController::class,'verifyOTP']);



Route::group(['middleware'=>['auth','isCustomer','verified'] ],function () {

});



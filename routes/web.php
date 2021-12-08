<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Regsitration;
use App\Http\Controllers\Login;
use App\Http\Controllers\StripPaymentController;
use App\Http\Controllers\Userprofile;
use App\Http\Controllers\SellerRegistration;
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
    return view('welcome');
});

Route::get('home',[Home::class,'index']);
Route::get('create-account',[Home::class,'signup']);
/*registration process*/
Route::post('signup',[Regsitration::class,'save_user']);
Route::get('email-cofirmation/{id}',[Regsitration::class,'email_confirmation']);
Route::post('verify_email',[Regsitration::class,'verify_email']);
Route::get('account-confirm',[Regsitration::class,'account_confirm']);
/*Login*/
Route::get('sign-in',[Login::class,'index']);
Route::post('login',[Login::class,'login']);
Route::get('dashboard',[Login::class,'dashboard']);
/*Login*/
/*User profile*/
Route::get('{id}/complete-profile',[Userprofile::class,'index']);
Route::post('save_information',[Userprofile::class,'save_information']);
Route::get('logout',[Login::class,'logout']);
/*User profile*/

/*Sellet*/
Route::get('seller-registration',[SellerRegistration::class,'index']);
Route::post('seller-registration',[SellerRegistration::class,'save_store']);
Route::get('store-dashboard/{id}',[SellerRegistration::class,'seller_dashboard']);
/*Sellet*/
<?php

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
    return view('welcome');
});

Route::get('/terms_and_conditions', function () {
    return view('terms_and_conditions');
});

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});

Route::get('/subscriber', 'SubscriberController@index');
Route::post('/subscriber', 'SubscriberController@action');
Route::get('/register-card', 'RegisterCreditCardController@index');
Route::get('/register-credit-card', 'RegisterCreditCardController@index');
Route::get('/debit/refill', 'DebitController@refill');
Route::post('/debit/callback', 'DebitController@callback');
Route::get('/refer/detail', 'ReferController@detail');

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
    return view('home');
});

Route::get('/tu-debt-restructuring', function () {
    return view('tu-debt-restructuring');
});

Route::get('/debt-relief-loan', function () {
    return view('debt-relief-loan');
});

Route::get('/mortgage-loan', function () {
    return view('mortgage-loan');
});
Route::get('/personal-loan', function () {
    return view('personal-loan');
});
Route::get('/owner-loan', function () {
    return view('owner-loan');
});

Route::get('/property-refinancing', function () {
    return view('property-refinancing');
});

Route::get('/bankruptcy-consultation', function () {
    return view('bankruptcy-consultation');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/procedure', function () {
    return view('procedure');
});

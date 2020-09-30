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
    return view('login2');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/1', function () {
    return view('index');
});

Route::get('/2', function () {
    return view('detail');
});

Route::get('/visitaida', function () {
    return view('visitaida');
});

Route::get('/visitdjon', function () {
    return view('visitdjon');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/informum', function () {
    return view('informum');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/dokter', function () {
    return view('dokter');
});
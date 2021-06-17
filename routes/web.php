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

// beranda
Route::get('/', function () {
    return view('index');
});

// pengisian form
Route::get('/pengisian-form', 'App\Http\Controllers\PengisianForm@index');

// petunjuk pengisian form
Route::get('/petunjuk-form', 'App\Http\Controllers\PetunjukForm@index');

// admin
Route::get('/login', 'App\Http\Controllers\Login@index');

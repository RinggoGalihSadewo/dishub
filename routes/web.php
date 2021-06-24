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

// tampilan pengisian form
Route::get('/pengisian-form', 'App\Http\Controllers\PengisianForm@index');

// hasil pengisian form
Route::post('/pengisian-form/hasil', 'App\Http\Controllers\Form@storeClient');
Route::get('/pengisian-form/hasil', 'App\Http\Controllers\Form@storeClient');

// petunjuk pengisian form
Route::get('/petunjuk-form', 'App\Http\Controllers\PetunjukForm@index');

// admin login
Route::get('/login1', 'App\Http\Controllers\Login@index');

// admin
Route::get('/logout', 'App\Http\Controllers\Logout@index');


//admin dashboard
Route::get('/admin/dashboard', 'App\Http\Controllers\AdminDashboard@index');

//admin daftar surat pernyataan
Route::get('/admin/daftar', 'App\Http\Controllers\Form@index');

//admin tambah data
Route::get('/admin/tambah', 'App\Http\Controllers\Form@create');

//admin detail
Route::get('/admin/daftar/detail/{client}', 'App\Http\Controllers\Form@show');

//admin tambah data
Route::post('/admin/daftar', 'App\Http\Controllers\Form@store');

//admin edit
Route::get('/admin/daftar/edit/{client}','App\Http\Controllers\Form@edit');
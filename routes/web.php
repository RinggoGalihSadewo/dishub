<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;

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
// cetak pdf
Route::get('/pengisian-form/hasil/cetakPDF', 'App\Http\Controllers\Form@cetakPDF');
// beranda
Route::get('/', function () {
    return view('index');
});

Route::post('/login', 'App\Http\Controllers\Auth@login');

// tampilan pengisian form
Route::get('/pengisian-form', 'App\Http\Controllers\PengisianForm@index');

Route::post('/pengisian-form/hasil/cetakPDF', 'App\Http\Controllers\Form@cetakPDF');


// hasil pengisian form
Route::post('/pengisian-form/hasil', 'App\Http\Controllers\Form@storeClient');
// Route::post('/pengisian-form/hasil', 'App\Http\Controllers\Form@cetakPDF');
Route::get('/pengisian-form/hasil', 'App\Http\Controllers\Form@storeClient');

Route::get('/pengisian-form', 'App\Http\Livewire\Map@index');
// Route::get('/admin/daftar/kirim-notifikasi/{client}','App\Mail\SendGmail@build');


// //develop view hasil form
// Route::get('/pengisian-form/hasil', 'App\Http\Controllers\Form@storeClient');

// petunjuk pengisian form
Route::get('/petunjuk-form', 'App\Http\Controllers\PetunjukForm@index');

// admin login
Route::get('/login', 'App\Http\Controllers\Auth@index');


Route::group(['middleware' => 'CekLogin'], function() {

	//admin dashboard
	Route::get('/admin/dashboard', 'App\Http\Controllers\AdminDashboard@index');

	//admin daftar surat pernyataan
	Route::get('/admin/daftar', 'App\Http\Controllers\Form@index');

	//admin cari data
	Route::get('/admin/daftar/cari','App\Http\Controllers\Form@search');

	//admin kirim notifikasi gmail
	Route::get('/admin/daftar/kirim-notifikasi/{client}','App\Http\Controllers\MailController@index');

	//admin tambah data
	Route::get('/admin/tambah', 'App\Http\Controllers\Form@create');

	//admin detail
	Route::get('/admin/daftar/detail/{client}', 'App\Http\Controllers\Form@show');

	//admin tambah data
	Route::post('/admin/daftar', 'App\Http\Controllers\Form@store');

	//admin edit
	Route::get('/admin/daftar/edit/{client}','App\Http\Controllers\Form@edit');

	//admin hapus
	Route::get('/admin/daftar/hapus/{client}', 'App\Http\Controllers\Form@destroy');

	//admin edit data
	Route::patch('/admin/daftar/{client}', 'App\Http\Controllers\Form@update');

	// admin logout
	Route::get('/logout', 'App\Http\Controllers\Auth@logout');

});


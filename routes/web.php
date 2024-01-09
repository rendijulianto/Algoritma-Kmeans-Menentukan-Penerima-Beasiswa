<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::post('/reset-iterasi', 'DashboardController@resetIterasi')->name('dashboard.reset-iterasi');


// Route::group mahasiswa
Route::prefix('mahasiswa')->group(function () {
    Route::get('/', 'MahasiswaController@index')->name('mahasiswa.index');
    Route::get('/create', 'MahasiswaController@create')->name('mahasiswa.create');
    Route::get('/{mahasiswa}/show', 'MahasiswaController@show')->name('mahasiswa.show');
    Route::post('/store', 'MahasiswaController@store')->name('mahasiswa.store');
    Route::get('/{mahasiswa}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
    Route::put('/{mahasiswa}/update', 'MahasiswaController@update')->name('mahasiswa.update');
    Route::delete('/{mahasiswa}/destroy', 'MahasiswaController@destroy')->name('mahasiswa.destroy');
});



// Route::group kmeans
Route::prefix('kmeans')->group(function () {
    Route::get('/', 'KmeansController@index')->name('kmeans.index');
});


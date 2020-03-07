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

Route::get('/', 'ControllerPages@index')->name('home');
Route::get('/about', 'ControllerPages@about')->name('about');
Route::get('/contact', 'ControllerPages@kontak')->name('kontak');
Route::get('/mahasiswa', 'ControllerMahasiswa@index')->name('tambah-mahasiswa');
Route::get('/mahasiswa/{id}', 'ControllerMahasiswa@show')->name('show-mahasiswa');
Route::post('/mahasiswa', 'ControllerMahasiswa@store')->name('simpan-mahasiswa');
Route::post('/mahasiswa/{id}', 'ControllerMahasiswa@update')->name('update-mahasiswa');
Route::delete('/mahasiswa/{id}', 'ControllerMahasiswa@destroy')->name('delete-mahasiswa');


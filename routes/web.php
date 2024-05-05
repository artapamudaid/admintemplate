<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    redirect('login');
});

Route::get('login', 'Auth\LoginController@login')->name('login')->middleware('guest');
Route::post('login', 'Auth\LoginController@authenticate')->name('auth')->middleware('guest');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'Admin\HomeController@index')->name('home');
Route::get('/profil', 'Admin\ProfilController@index')->name('profil');
Route::get('/tentang', 'Admin\TentangController@index')->name('tentang');
Route::get('/prestasi', 'Admin\PrestasiController@index')->name('prestasi');
Route::get('/galeri', 'Admin\GaleriController@index')->name('galeri');
Route::get('/prodi', 'Admin\ProdiController@index')->name('prodi');
Route::get('/semester', 'Admin\SemesterController@index')->name('semester');
Route::get('/dosen', 'Admin\DosenController@index')->name('dosen');


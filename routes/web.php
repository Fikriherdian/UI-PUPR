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
    return view('frontend.home');
});
Route::view('/xd','frontend.cd');
Route::view('/berita/artikel','frontend.pages.berita_detail');
Route::view('/artikel','frontend.pages.artikel');
Route::view('/ppid','frontend.pages.ppid');
Route::view('/tupoksi','frontend.pages.tupoksi');
Route::view('/struktur','frontend.pages.struktur');
Route::view('/galeri','frontend.pages.galeri');
Route::view('/superpesialis','frontend.pages.superpesialis');

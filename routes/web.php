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

Route::view('', view('welcome'))->name('index');
Route::view('Peta', view('peta'))->name('peta');
Route::view('Sambutan', view('sambutan'))->name('sambutan');
Route::view('Merch', view('merch'))->name('merch');
Route::view('Gallery', view('gallery'))->name('gallery');
Route::view('Fakultas', view('fakultas'))->name('fakultas');
Route::view('Anthem', view('anthem'))->name('anthem');
Route::view('Ukm', view('ukm'))->name('ukm');
Route::view('Logo', view('logo'))->name('logo');
Route::view('Maskot', view('maskot'))->name('maskot');
Route::view('Countdown', view('countdown'))->name('countdown');
Route::view('Tugas 1 Pra-Bakti', view('tugas1pra'))->name('tugas1pra');
Route::view('Tugas 2 Pra-Bakti', view('tugas2pra'))->name('tugas2pra');
Route::view('Tugas 3 Pra-Bakti', view('tugas3pra'))->name('tugas3pra');
Route::view('Tugas 1 Pasca-Bakti', view('tugas1pasca'))->name('tugas1pasca');
Route::view('Tugas 2 Pasca-Bakti', view('tugas2pasca'))->name('tugas2pasca');

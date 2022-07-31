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
    return view('welcome');
})->name("index");

Route::get('/peta', function () {
    return view('peta');
})->name('peta');

Route::get('/sambutan', function () {
    return view('sambutan');
})->name('sambutan');

Route::get('/filosofi', function () {
    return view('filosofi');
})->name('filosofi');

Route::get('/merch', function () {
    return view('merch');
})->name('merch');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/fakultas', function () {
    return view('fakultas');
})->name('fakultas');

Route::get('/anthem', function () {
    return view('anthem');
})->name('anthem');

Route::get('/ukm', function () {
    return view('ukm');
})->name('ukm');

Route::get('/logo', function () {
    return view('logo');
})->name('logo');

Route::get('/maskot', function () {
    return view('maskot');
})->name('maskot');

Route::get('/countdown', function () {
    return view('countdown');
})->name('countdown');

Route::get('/Tugas 1 Pra-Bakti', function () {
    return view('tugas1pra');
})->name('tugas1pra');

Route::get('/Tugas 2 Pra-Bakti', function () {
    return view('tugas2pra');
})->name('tugas2pra');

Route::get('/Tugas 3 Pra-Bakti', function () {
    return view('tugas3pra');
})->name('tugas3pra');

Route::get('/Tugas 1 Pasca-Bakti', function () {
    return view('tugas1pasca');
})->name('tugas1pasca');

Route::get('/Tugas 2 Pasca-Bakti', function () {
    return view('tugas2pasca');
})->name('tugas2pasca');

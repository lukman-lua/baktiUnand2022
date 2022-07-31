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
});

Route::get('/peta', function () {
    return view('peta');
});

Route::get('/sambutan', function () {
    return view('sambutan');
});

Route::get('/filosofi', function () {
    return view('filosofi');
});

Route::get('/merch', function () {
    return view('merch');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/fakultas', function () {
    return view('fakultas');
});

Route::get('/anthem', function () {
    return view('anthem');
});

Route::get('/ukm', function () {
    return view('ukm');
});

Route::get('/logo', function () {
    return view('logo');
});

Route::get('/maskot', function () {
    return view('maskot');
});

Route::get('/countdown', function () {
    return view('countdown');
});

Route::get('/tugas1pra', function () {
    return view('tugas1pra');
});

Route::get('/tugas2pra', function () {
    return view('tugas2pra');
});

Route::get('/tugas3pra', function () {
    return view('tugas3pra');
});

Route::get('/tugas1pasca', function () {
    return view('tugas1pasca');
});

Route::get('/tugas2pasca', function () {
    return view('tugas2pasca');
});

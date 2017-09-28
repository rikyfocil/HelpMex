<?php

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

Route::get('donador', function () {
    return view('donador.urgencias');
})->name('index');

Route::get('acerca_de', function () {
    return view('donador.acerca_de');
})->name('acerca_de');

Route::get('donador/subcat', function () {
    return view('donador.subcat');
});

Route::get('centro', function() {
	return view('centros.typography');
});

Route::get('notif', function() {
	return view('centros.notifications');
});
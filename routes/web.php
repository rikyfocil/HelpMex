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

//Rutas para el donador
Route::get('donador', function () {
    return view('donador.urgencias');
})->name('index');

Route::get('acerca_de', function () {
    return view('donador.acerca_de');
})->name('acerca_de');

Route::get('contacto', function () {
    return view('donador.contacto');
})->name('contacto');

Route::get('donador/subcat', function () {
    return view('donador.subcat');
});


//Rutas para los centros
Route::get('centro/comunidades', function() {
	return view('centro.typography');
})->name('comunidades');

Route::get('centro/comunidades/registro', function() {
	return view('centro.registro_comunidades');
})->name('registro_comunidades');

Route::get('centro/usuarios/registro', function() {
	return view('centro.registro_usuarios');
})->name('registro_usuarios');

Route::get('centro/dashboard', function() {
	return view('centro.dashboard');
})->name('dashboard');

Route::get('centro/info', function() {
	return view('centro.info');
})->name('info_centro');

//Otros
Route::get('notif', function() {
	return view('centro.notifications');
});
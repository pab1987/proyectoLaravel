<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', function () {
    return ('Ruta home');
});

Route::get('blog', function () {
    return ('Listado de punlicaciones');
});

Route::get('blog/{slug}', function ($slug) {
    return $slug;
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});
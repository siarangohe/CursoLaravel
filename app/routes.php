<?php

Route::get('/', function() // estos son rutas directas
{
    return View::make('hello');
});

Route::get('/prueba', function()
{
    return View::make('prueba');
});

Route::get('/test', function()
{
    echo "esto es una prueba";
});

Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');
<?php

Route::get('/', function() // estos son rutas directas
{
    return View::make('hello');
});

Route::get('/prueba', function()
{
    return View::make('prueba');
});

Route::get('/test2', function()
{
    return View::make('ejemplo');
});

Route::get('/test1', function()
{
    return View::make('ejemploSmarty');
});

Route::get('/siarangohe', function()
{
    return View::make('perfil.perfil')
            ->with("nombre", "Simón");
});

Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');
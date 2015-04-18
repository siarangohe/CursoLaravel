<?php

Route::get('/', function() // estos son rutas directas
{
    if(Auth::check()) {
        return Redirect::to("/profile");
    }
    return View::make('general.login');
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

Route::get('/profile', array('before'=>'auth', function() 
//Aqui se verifica que antes de cargar el perfil este autenticado.
{
    $publicaciones = Publicacion::orderBy('id', 'des')->get();
    return View::make('perfil.perfil')
            ->with("nombre", Auth::user()->nombre)
            ->with("publicaciones", $publicaciones);
}));

Route::get('/login', function()
{
    return View::make('general.login');
});

Route::post('/loguear', function()
{
    $email = Input::get('email');
    $password = Input::get('password');

    if(Auth::attempt(['email'=>$email, 'password'=>$password])) {
        return Redirect::to("/profile");
    }else {
        return Redirect::to("/logout");
    }
});

Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to("/login");
});

Route::controller('personal', 'PersonalController');
Route::controller('clase', 'Clase2Controller');
Route::controller('publicacion', 'PublicacionController');
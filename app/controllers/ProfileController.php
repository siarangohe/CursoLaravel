<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfileController
 *
 * @author Simon Arango Herrera
 */
class ProfileController extends BaseController {
    
    //para cargar mi perfil
    public function getIndex() {
        
        $listaAmigos = Usuario::all();
        $amigos = "";
        
        foreach ($listaAmigos as $amigo) {
            $amigos.=", " . '"' . "{$amigo->nombre}" . '"';
        }
        
        $amigos = trim($amigos, ","); // Con esto le digo que al string me le quite todas las comas por derecha y por izquierda.
        
        $publicaciones = Usuario::find(Auth::user()->id)->misPublicaciones();
        
        return View::make('perfil.perfil')
                ->with("nombre", Auth::user()->nombre)
                ->with("publicaciones", $publicaciones)
                ->with("email", Auth::user()->email)
                ->with("amigos", $amigos)
                ->with("foto", Auth::user()->id.".jpg");
    }
    
    // Cargar el perfil de otra persona
    public function getVer($id){
        if($id==Auth::user()->id){
            return Redirect::to("/profile");
        }
        
        $usuario = Usuario::find($id);
        
        // Si el usuario existe, haga algo, de lo contrario redireccioneme a mi perfil
        if($usuario){
            // Aqui llamo al metodo del modelo Usuario.php para mostrar las publicaciones de cada usuario.
            // Todas las consultas (SQL) debe ir en los modelos, nada en los controladores.
            $publicaciones = $usuario->misPublicaciones();
            
            return View::make('perfil.perfil')
                    ->with("nombre", $usuario->nombre)
                    ->with("publicaciones", $publicaciones)
                    ->with("email", $usuario->email)
                    //->with("amigos", $amigos)
                    ->with("foto", $usuario->id . ".jpg");
        } else {
            return Redirect::to("/profile");
        }
    }
    
    public function getLogout(){
        Auth::logout();
        return Redirect::to("/login");
    }
}

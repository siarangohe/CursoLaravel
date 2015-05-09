<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublicacionController
 *
 * @author usuario
 * 
 * Un contolador me agrupa varias funciones que le puedo hacer a dicha clase
 * en este caso "Publicacion" 
 */
class PublicacionController extends BaseController {
    public function postCrear() {
        //dd(Input::all); //traigame todo lo que se mando el la publicacion
        $publicacion = [
            'publicacion' => Input::get('publicacion'),
            'tipo' => '0',
            'id_usuario' => Auth::user()->id,
            'receptor' => Input::get('receptor')
        ];
        DB::table('publicacion')->insert($publicacion);
        return Redirect::to("/profile/ver/".Input::get('receptor'));
    }
    
    public function postComentar() {
        
    }
    
    public function postMeGusta() { //Al poner postMeGusta, en la url se va a ver me-gusta
        
        $publicacion = Input::get('publicacion');
        
        $megusta = [
            'id_usuario' => Auth::user()->id,
            'id_publicacion' => $publicacion
        ];
        DB::table('me_gusta')->insert($megusta);
        
        $data['nlikes'] =  Publicacion::likes($publicacion);
        
        return Response::json($data);
        
    }

        public function getEliminar($id) {
        $publicacion = Publicacion::find($id);
        if($publicacion && $publicacion->id_usuario == Auth::user()->id) {
            $publicacion->delete();
        }
        return Redirect::to("/profile");
    }
}

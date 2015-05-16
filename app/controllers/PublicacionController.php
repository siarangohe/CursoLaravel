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
        if(Request::ajax()) { //Cuando es ajax, hace tal cosa, este metodo es para saber si es ajax o no
            $publicacion = Publicacion::find(Input::get('publicacion'));
            $comentario = [
                'publicacion' => Input::get('comentario'),
                'tipo' => 1,
                'id_usuario' => Auth::user()->id,
                'receptor' => $publicacion->receptor,
                'id_padre' => $publicacion->id
            ];
            DB::table('publicacion')->insert($comentario);
            return Response::json($comentario);
        }
    }
    
    public function postMeGusta() { //Al poner postMeGusta, en la url se va a ver me-gusta
        
        $publicacion = Input::get('publicacion');
        $usuario = Usuario::find(Auth::user()->id);
        
        if($usuario->leGustaPublicacion($publicacion)) {
            $usuario->yaNoLeGustaPublicacion($publicacion);
            $data['type'] = -1;
        } else {
            $megusta = [
                'id_usuario' => Auth::user()->id,
                'id_publicacion' => $publicacion
            ];
            DB::table('me_gusta')->insert($megusta);
            $data['type'] = 1;
        }
        
        
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

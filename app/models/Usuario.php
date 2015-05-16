<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Simon Arango Herrera
 */
class Usuario extends Eloquent {
    protected $table = 'usuario';
    
    public function misPublicaciones() {
        return Publicacion::where('receptor', $this->id)
            ->where('tipo',0)
            ->orderBy('id', 'des')
            ->get();
    }
    
    public function misAmigos() {
        return Usuario::where('id','<>', $this->id)->get();
    }
    
    public function leGustaPublicacion($publicacion) {
        return Megusta::where('id_usuario', $this->id)
                ->where('id_publicacion', $publicacion)
                ->count()>0;
    }
    
    public function yaNoLeGustaPublicacion($publicacion) {
        Megusta::where('id_usuario', $this->id)
                ->where('id_publicacion', $publicacion)
                ->delete();
    }
}

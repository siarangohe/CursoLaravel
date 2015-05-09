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
            ->orderBy('id', 'des')
            ->get();
    }
    
    public function misAmigos() {
        return Usuario::where('id','<>', $this->id)->get();
    }
}

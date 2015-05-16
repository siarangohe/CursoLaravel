<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publicacion
 *
 * @author usuario
 */
class Publicacion extends Eloquent {
    // Aqui lo que estoy diciendo, es que esta $table hace referencia a la tabla publicacion
    // de mi BD. Con eso puedo hacer todo tipo de consultas.
    protected $table = 'publicacion';
    
    public function freshTimestamp() {
        return format('Y-m-d h:i:s');
    }
    
    public static function likes($id) {
        return Megusta::where('id_publicacion', $id)
        ->count();
    }
    
    public function leGustaA($usuario) {
        return Megusta::where('id_publicacion', $this->id)
                ->where('id_usuario', $usuario)
                ->count() > 0 ? "Ya no me gusta" : "Me gusta";
    }
    
    public function comentarios() {
        return Publicacion::where('id_padre', $this->id)
                ->where('tipo', 1)
                ->get();
    }
}

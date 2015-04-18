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
}

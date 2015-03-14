<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Clase2Controller extends BaseController {
    
    public function getCss(){
        return View::make('index');
    }
}

// La mejor manera de ingresar un metodo en la URL es por ejp registrar-persona, esto se hace
// de la siguiente manera: getRegistrarPersona.
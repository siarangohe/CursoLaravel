<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PersonalController extends BaseController {
    
    public function getRegistrar($tipo) {
        // echo $tipo;
        if($tipo == "medico") {
            return View::make('registro.medico');
        }else if($tipo=="enfermera") {
            return View::make('registro.enfermera');
        }else if($tipo=="paciente") {
            return View::make('registro.paciente');
        }else {
            echo "Error!";
        }
    }
    
    public function getEditar() {
        echo "estoy editando";
    }
    
}

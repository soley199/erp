<?php

require_once "../controllers/usuarios.controller.php";
require_once "../models/usuarios.models.php";
class AjaxTrabajadores{
    /* =====================================
    EDITA TRABAJADOR
    ========================================*/
    public $idTrabajador;

    public function  ajaxEditarTrabajador(){
        $columna = "id";
        $valor = $this->idTrabajador;
        $respuesta = ControladorUsuarios::ctrMostrarTrabajadores($columna, $valor);
        
        echo json_encode($respuesta);
    }
}


/* =====================================
EDITA TRABAJADOR
========================================*/
if(isset($_POST["idTrabajador"])){
    
    $edita = new AjaxTrabajadores();
    $edita -> idTrabajador = $_POST["idTrabajador"];
    $edita -> ajaxEditarTrabajador();
}


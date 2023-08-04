<?php

require_once "../controllers/ingenieria.controller.php";
require_once "../models/ingenieria.models.php";
class AjaxIngenieria{
    /* =====================================
    EDITA Linea
    ========================================*/
    public $idLinea;

    public function  ajaxEditarLinea(){
        $columna = "id";
        $valor = $this->idLinea;
        $respuesta = ControladorIngenieria::ctrMostrarLineaProductos($columna, $valor);
        
        echo json_encode($respuesta);
    }
}


/* =====================================
EDITA LINEA
========================================*/
if(isset($_POST["idLinea"])){
    
    $edita = new AjaxIngenieria();
    $edita -> idLinea = $_POST["idLinea"];
    $edita -> ajaxEditarLinea();
}


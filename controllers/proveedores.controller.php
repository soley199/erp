<?php

class ControladorProveedores{
    /* =====================================
    MOSTRAR PROVEEDORES
    ========================================*/
    static public function ctrMostrarProveedores($columna,$valor){
        $tabla = "preoveedores";
        $respuesta = ModeloProveedores::mdlMostrarProveedores($tabla, $columna, $valor);
        return $respuesta;
    }
}
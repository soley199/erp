<?php

class ControladorProveedores{
    /* =====================================
    MOSTRAR PROVEEDORES
    ========================================*/
    static public function ctrMostrarProveedores($columna,$valor){
        $tabla = "proveedores";
        $respuesta = ModeloProveedores::mdlMostrarProveedores($tabla, $columna, $valor);
        return $respuesta;
    }
      /* =====================================
    MOSTRAR PROVEEDORES
    ========================================*/
    static public function ctrMostrarProductos($columna,$valor){
        $tabla = "productoprovedor";
        $respuesta = ModeloProveedores::mdlMostrarProductos($tabla, $columna, $valor);
        return $respuesta;
    }
}
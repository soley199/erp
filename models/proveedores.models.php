<?php 

class ModeloProveedores{
    /* =====================================
    MOSTRAR PROVEEDORES
    ========================================*/
    static public function mdlMostrarProveedores($tabla, $columna, $valor){
        if($columna != null){
            $stmt = Conexion::conectar()->prepare("");
            $stmt -> bindParam(":".$columna,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT PB.*, ES.estatus,ES.descripcion FROM $tabla PB JOIN estatus ES ON PB.idEstatus=ES.id;");
            $stmt -> execute();
            return $stmt -> fetchAll();            
        }
        
    }


    
}
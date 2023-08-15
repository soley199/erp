<?php 
include_once 'conexion.php';

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
     /* =====================================
    Mostrar PRODUCTOS
    ========================================*/
    static public function mdlMostrarProductos($tabla, $columna, $valor){

        if($columna != null){
            $stmt = Conexion::conectar()->prepare("SELECT TB.*, pu.puesto, pu.descripcion AS 'puDescripcion', ES.estatus, ES.descripcion AS 'esDescripcion' FROM $tabla TB JOIN puestos PU ON TB.idPuesto=PU.id JOIN estatus ES ON TB.idEstatus=ES.id WHERE TB.$columna = :$columna");
            $stmt -> bindParam(":".$columna,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT PP.*,P.proveedor,M.material,TM.tipo,N.nomenclatura,UM.unidadMedida,UM.simbolo,E.estatus FROM $tabla PP JOIN proveedores P ON PP.idProveedor=P.id JOIN materiales M ON PP.idMaterial = M.id JOIN tipomaterial TM ON PP.idTipoMaterial = TM.id JOIN nomenclaturas N ON PP.idNomenclatura =  N.id JOIN unidadmedida UM ON PP.idUnidadMedida =  UM.id JOIN estatus E ON PP.idEstatus=E.id");
            $stmt -> execute();
            return $stmt -> fetchAll();            
        }
        
    }


    
}
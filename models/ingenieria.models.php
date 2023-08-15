<?php 
include_once 'conexion.php';

class ModeloIngenieria{
    static public function mdlMostrarLineaProductos($tabla, $columna, $valor){
        if($columna != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE $columna = :$columna");
            $stmt -> bindParam(":".$columna,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();            
        }
        
    }

    /*=============================================
	=            AGREGAR Tranajador=
	=============================================*/
	static public function mdlAddLineaProductos($tabla,$datos){
        // var_dump($datos["idPuesto"]);
        // return false;
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id, nombre, descripcion, foto, color) VALUES (null,:nombre, :descripcion, null, :color)");
        $stmt -> bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion",$datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":color",$datos["color"], PDO::PARAM_STR);
        if($stmt -> execute()){
            return "ok";
        }else{
            return $stmt->errorInfo();
        }
	}
    /*=============================================
	=           Editar Linea=
	=============================================*/
    static public function mdlEditLinea($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, descripcion = :descripcion, foto = :foto, color = :color WHERE id = :id");
        $stmt -> bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion",$datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":foto",$datos["foto"], PDO::PARAM_STR);
        $stmt -> bindParam(":color",$datos["color"], PDO::PARAM_STR);
        $stmt -> bindParam(":id",$datos["id"], PDO::PARAM_INT);
        if($stmt -> execute()){
            return "ok";
        }else{
            return $stmt->errorInfo();
        } 
    }

    /*=============================================
	=            BORRAR Linea=
	=============================================*/
    static public function mdlBorrarLinea($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt -> bindParam(":id",$datos, PDO::PARAM_STR);
        if($stmt -> execute()){
            return "ok";
        }else{
            return $stmt->errorInfo();
        } 

    }
}
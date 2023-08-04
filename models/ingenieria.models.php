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
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido = :apellido, sexo = :sexo, foto = :foto, nota = :nota, password = :password, accesoPanel = :accesoPanel, sistemaPerfil = :sistemaPerfil, idPuesto = :idPuesto, idEstatus = :idEstatus WHERE id = :id");
        $stmt -> bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellido",$datos["apellido"], PDO::PARAM_STR);
        $stmt -> bindParam(":sexo",$datos["sexo"], PDO::PARAM_STR);
        $stmt -> bindParam(":foto",$datos["foto"], PDO::PARAM_STR);
        $stmt -> bindParam(":nota",$datos["nota"], PDO::PARAM_STR);
        $stmt -> bindParam(":password",$datos["password"], PDO::PARAM_STR);
        $stmt -> bindParam(":accesoPanel",$datos["accesoPanel"], PDO::PARAM_STR);
        $stmt -> bindParam(":sistemaPerfil",$datos["sistemaPerfil"], PDO::PARAM_STR);
        $stmt -> bindParam(":idPuesto",$datos["idPuesto"], PDO::PARAM_INT);
        $stmt -> bindParam(":idEstatus",$datos["idEstatus"], PDO::PARAM_INT);
        $stmt -> bindParam(":id",$datos["id"], PDO::PARAM_INT);
        if($stmt -> execute()){
            return "ok";
        }else{
            return $stmt->errorInfo();
        } 
    }
}
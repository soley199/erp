<?php

    include_once 'conexion.php';

class ModeloUsuarios{
    /* =====================================
    Mostrar Usuarios
    ========================================*/
    static public function mdlMostrarUsuarios($tabla, $columna, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
        $stmt -> bindParam(":".$columna,$valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetch();

    }
    /*=============================================
	=            RECUPERAR Puesto         =
	=============================================*/
	static public function mdlBuscarPuesto($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT id,puesto FROM $tabla");
		$stmt -> execute();
		return $stmt->fetchAll();
	}
    /*=============================================
	=            RECUPERAR Estatus Tranajador         =
	=============================================*/
	static public function mdlBuscarEstatusTrabajador($columna){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM estatus WHERE tabla = '$columna'");
		$stmt -> execute();
        // var_dump($stmt->fetchAll());
        // return false;
		return $stmt->fetchAll();

	}
    /*=============================================
	=            RECUPERAR Estatus Tranajador      SELECT MAX(numTarjeta)+1 FROM trabajadores   =
	=============================================*/
	static public function mdlAddTrabajador($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(numTarjeta, nombre, apellido, sexo, foto, nota, password, accesoPanel, sistemaPerfil, idPuesto, idEstatus) VALUES ((SELECT MAX(numTarjeta)+1 FROM $tabla), :nombre, :apellido, :sexo, :foto, :nota, :password, :accesoPanel, :sistemaPerfil, :idPuesto, :idEstatus)");
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
        if($stmt -> execute()){
            return "ok";
        }else{
            return"error";
        }
	}
}
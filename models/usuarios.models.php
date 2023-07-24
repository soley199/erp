<?php

    include_once 'conexion.php';

class ModeloUsuarios{
    /* =====================================
    Ultimo Numero de tarjeta 
    ========================================*/
    static public function mdlRecuperarNumeroTarjeta($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT MAX(numTarjeta)+1 AS 'numTarjeta' FROM $tabla");
        $stmt -> execute();
        return $stmt -> fetch();
    }
       
    /* =====================================
    Mostrar Usuarios
    ========================================*/
    static public function mdlMostrarUsuarios($tabla, $columna, $valor){

        if($columna != null){
            $stmt = Conexion::conectar()->prepare("SELECT TB.*,pu.puesto,pu.descripcion FROM $tabla TB JOIN puestos PU ON TB.idPuesto=PU.id WHERE TB.$columna = :$columna");
            $stmt -> bindParam(":".$columna,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT TB.*, pu.puesto, pu.descripcion AS 'puDescripcion', ES.estatus, ES.descripcion AS 'esDescripcion' FROM $tabla TB JOIN puestos PU ON TB.idPuesto=PU.id JOIN estatus ES ON TB.idEstatus=ES.id");
            $stmt -> execute();
            return $stmt -> fetchAll();            
        }
        
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
	=            RECUPERAR Estatus Tranajador=
	=============================================*/
	static public function mdlAddTrabajador($tabla,$datos){
        // var_dump($datos["idPuesto"]);
        // return false;
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id,numTarjeta, nombre, apellido, sexo, foto, nota, password, accesoPanel, sistemaPerfil, idPuesto, idEstatus) VALUES (null,:numTarjeta, :nombre, :apellido, :sexo, :foto, :nota, :passwordd, :accesoPanel, :sistemaPerfil, :idPuesto, :idEstatus)");
        $stmt -> bindParam(":numTarjeta",$datos["numTarjeta"],PDO::PARAM_INT);
        $stmt -> bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellido",$datos["apellido"], PDO::PARAM_STR);
        $stmt -> bindParam(":sexo",$datos["sexo"], PDO::PARAM_STR);
        $stmt -> bindParam(":foto",$datos["foto"], PDO::PARAM_STR);
        $stmt -> bindParam(":nota",$datos["nota"], PDO::PARAM_STR);
        $stmt -> bindParam(":passwordd",$datos["password"], PDO::PARAM_STR);
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
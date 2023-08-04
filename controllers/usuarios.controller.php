<?php
class ControladorUsuarios{
    /* =====================================
    Acceso Usuarios Login
    ========================================*/
    static public function ctrIngresoUsuario(){
        if(isset($_POST["ingrUsuario"])){
            if(preg_match('/^[0-9]+$/',$_POST["ingrUsuario"])){
                $tabla = "trabajadores";
                $columna = "numTarjeta";
                $valor = $_POST["ingrUsuario"];
                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $columna, $valor);
            
                if($respuesta["numTarjeta"] == $_POST["ingrUsuario"] && $respuesta["password"] == $_POST["ingrPass"]){
                    $_SESSION["erp_Sesion"] = true;
                    $_SESSION["datosUsuario"] = $respuesta;
                    date_default_timezone_set('America/Mexico_City');
                    echo'<script>
                    window.location = "arb_inicio";
                    </script>';
                }else{
                    echo '<br><div class="alert alert-danger">Error al ingresar, verifica tu contraseña y Numero de tarjeta </div>';
                }
            }
        }
    }
    /* =====================================
    Busca los puestos para un Select
    ========================================*/
    static public function ctrBuscarPuesto(){
        $tabla = "puestos";
		$respuesta = ModeloUsuarios::mdlBuscarPuesto($tabla);
		return $respuesta;
    }
    /* =====================================
    Busca los puestos para un Select
    ========================================*/
    static public function ctrBuscarEstatusTrabajador(){
        $columna = "trabajadores";
		$respuesta = ModeloUsuarios::mdlBuscarEstatusTrabajador($columna);
		return $respuesta;
    }
    /* =====================================
    Agregar Usuario 
    ========================================*/
    static public function ctrAddUsuario(){
        if(isset($_POST["nombreTrabajador"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST["nombreTrabajador"])){
                $tabla= 'trabajadores';            
                //RECUPERA ULTIMO NUMERO DE TARJETA EXISTENTE + 1
                $numTarjeta = ModeloUsuarios::mdlRecuperarNumeroTarjeta($tabla);

                /* =====================================
                Agregar Usuario 
                ========================================*/
                $ruta = "views/assets/images/users/default.jpg";
                if(isset($_FILES["fotoTrabajador"]["tmp_name"]) && !empty($_FILES["fotoTrabajador"]["tmp_name"])){
                    list($ancho,$alto) = getimagesize($_FILES["fotoTrabajador"]["tmp_name"]);
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;
                    //DIRECTORIO PARA GUARDAR LA IMAGEN
                    $directorio = "views/trabajadores/".$numTarjeta["numTarjeta"];
                    mkdir($directorio,0755);

                    // CONFIGURACION DE GUARDADO PARA JPEG
                    if($_FILES["fotoTrabajador"]["type"] == "image/jpeg"){
                        // Creamos el directorio para guardar la imagen
                        $aleatorio = mt_rand(100,999);
                        $ruta = "views/trabajadores/".$numTarjeta["numTarjeta"]."/".$aleatorio.".jpg";
                        //Configuramos redimencionamos y gardamos imagen en el directorio creado
                        $origen = imagecreatefromjpeg($_FILES["fotoTrabajador"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagejpeg($destino,$ruta);
                    }
                    if($_FILES["fotoTrabajador"]["type"] == "image/png"){
                        // Creamos el directorio para guardar la imagen
                        $aleatorio = mt_rand(100,999);
                        $ruta = "views/trabajadores/".$numTarjeta["numTarjeta"]."/".$aleatorio.".png";
                        //Configuramos redimencionamos y gardamos imagen en el directorio creado
                        $origen = imagecreatefrompng($_FILES["fotoTrabajador"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagepng($destino,$ruta);
                    }
                }
                $datos = array("nombre" => $_POST["nombreTrabajador"],
                            "apellido" => $_POST["apellidosTrabajador"],
                            "numTarjeta" => $numTarjeta["numTarjeta"],
                            "sexo" => $_POST["sexoTrabajador"],
                            "foto" => $ruta,
                            "nota" => null,
                            "password" => $_POST["passTrabajador"],
                            "accesoPanel" => 0,
                            "sistemaPerfil" => $_POST["perfilSistemaTrabajador"],
                            "idPuesto" => $_POST["puestoTrabajador"],
                            "idEstatus" => $_POST["estatusTrabajador"]);
                            
                            
                $respuesta = ModeloUsuarios::mdlAddTrabajador($tabla,$datos);

                if($respuesta == "ok"){
                    echo'<script>
                        Swal.fire({
                            title: "Numero Tarjeta '.$datos["numTarjeta"].'",
                            text: "Alta Correcta",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Aceptar"                        
                        }).then((result)=>{
                            if(result.isConfirmed){
                                window.location = "rh_usuarios";
                            }
                        });
                    </script>';
                } else{
                    var_dump($respuesta);
                }
            }else{
                echo'<script>
                    Swal.fire({
                        title: "Error!",
                        text: "El Usuario no Puede ir Vacio",
                        icon: "error",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"                        
                    }).then((result)=>{
                        if(result.isConfirmed){
                            window.location = "rh_usuarios";
                        } else{
                            window.location = "rh_usuarios";
                        }
                    });
                </script>';
            }
        }
    }
    /* =====================================
    MOSTRAR TRABJADORES
    ========================================*/
    static public function ctrMostrarTrabajadores($columna,$valor){
        $tabla = "trabajadores";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $columna, $valor);
        return $respuesta;
    }
    /* =====================================
    EDITAR TRABJADORES
    ========================================*/
    static public function ctrEditUsuario(){
        if(isset($_POST["nombreTrabajadorEditar"])){            
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nombreTrabajadorEditar"])){
                
                $tabla= 'trabajadores';
                /* =====================================
                Agregar Usuario 
                ========================================*/
                $ruta = $_POST["fotoTrabajadorActual"];
                if(isset($_FILES["fotoTrabajadorEditar"]["tmp_name"]) && !empty($_FILES["fotoTrabajadorEditar"]["tmp_name"])){
                    list($ancho,$alto) = getimagesize($_FILES["fotoTrabajadorEditar"]["tmp_name"]);
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;
                    //DIRECTORIO PARA GUARDAR LA IMAGEN
                    $directorio = "views/trabajadores/".$_POST["numTarjetaActual"];
                    //VERIFICAR SI EXISTE OTRA FOTO
                    if($_POST["fotoTrabajadorActual"] == "views/assets/images/users/default.jpg"){
                        
                    }else{
                        unlink($_POST["fotoTrabajadorActual"]);
                    }
                    if(file_exists($directorio)){

                    }else{
                        mkdir($directorio,0755);
                    }
                    // CONFIGURACION DE GUARDADO PARA JPEG
                    if($_FILES["fotoTrabajadorEditar"]["type"] == "image/jpeg"){
                        // Creamos el directorio para guardar la imagen
                        $aleatorio = mt_rand(100,999);
                        $ruta = "views/trabajadores/".$_POST["numTarjetaActual"]."/".$aleatorio.".jpg";
                        //Configuramos redimencionamos y gardamos imagen en el directorio creado
                        $origen = imagecreatefromjpeg($_FILES["fotoTrabajadorEditar"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagejpeg($destino,$ruta);
                    }
                    if($_FILES["fotoTrabajadorEditar"]["type"] == "image/png"){
                        // Creamos el directorio para guardar la imagen
                        $aleatorio = mt_rand(100,999);
                        $ruta = "views/trabajadores/".$_POST["numTarjetaActual"]."/".$aleatorio.".png";
                        //Configuramos redimencionamos y gardamos imagen en el directorio creado
                        $origen = imagecreatefrompng($_FILES["fotoTrabajadorEditar"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagepng($destino,$ruta);
                    }
                }
                $datos = array("id" => $_POST["idtrabajadorEditar"],
                            "nombre" => $_POST["nombreTrabajadorEditar"],
                            "apellido" => $_POST["apellidosTrabajadorEditar"],
                            "numTarjeta" => $_POST["numTarjetaActual"],
                            "sexo" => $_POST["sexoTrabajadorEditar"],
                            "foto" => $ruta,
                            "nota" => null,
                            "password" => $_POST["passTrabajadorEditar"],
                            "accesoPanel" => 0,
                            "sistemaPerfil" => $_POST["perfilSistemaTrabajadorEdita"],
                            "idPuesto" => $_POST["puestoTrabajadorEdita"],
                            "idEstatus" => $_POST["estatusTrabajadorEdita"]);
                            
                $respuesta = ModeloUsuarios::mdlEditTrabajador($tabla,$datos);
                if($respuesta = "ok"){
                    echo'<script>
                        Swal.fire({
                            title: "Numero Tarjeta '.$datos["numTarjeta"].'",
                            text: "Actualizado!!!",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Aceptar"                        
                        }).then((result)=>{
                            if(result.isConfirmed){
                                window.location = "rh_usuarios";
                            }
                        });
                    </script>';
                }
            }else{
                echo'<script>
                        Swal.fire({
                            title: "Error!",
                            text: "El Usuario no Puede ir Vacio o caracteres especiales",
                            icon: "error",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"                        
                        }).then((result)=>{
                            if(result.isConfirmed){
                                window.location = "rh_usuarios";
                            } else{
                                window.location = "rh_usuarios";
                            }
                        });
                    </script>';
            }
        }
    }
    /* =====================================
    ELIMINAR TRABJADORES
    ========================================*/
    static public function ctrBorrarUsuario(){
        if(isset($_GET["idTrabajador"])){
            $tabla= 'trabajadores';
            $datos = $_GET["idTrabajador"];

            if($_GET["foto"] == "views/assets/images/users/default.jpg"){
            }else{
                unlink($_GET["foto"]);
                rmdir('views/trabajadores/'.$_GET["numTarjeta"]);
            }
            
            $respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla,$datos);
                if($respuesta = "ok"){
                    echo'<script>
                        Swal.fire({
                            title: "Numero Tarjeta '.$_GET["numTarjeta"].'",
                            text: "SE ELIMINO",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Aceptar"                        
                        }).then((result)=>{
                            if(result.isConfirmed){
                                window.location = "rh_usuarios";
                            }
                        });
                    </script>';
                }
        }

    }

}

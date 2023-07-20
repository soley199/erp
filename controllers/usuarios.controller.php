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

                $datos = array("nombre" => $_POST["nombreTrabajador"],
                            "apellido" => $_POST["apellidosTrabajador"],
                            "sexo" => $_POST["sexoTrabajador"],
                            "foto" => $_POST["fotoTrabajador"],
                            "nota" => null,
                            "password" => $_POST["passTrabajador"],
                            "accesoPanel" => 0,
                            "sistemaPerfil" => $_POST["perfilSistemaTrabajador"],
                            "idPuesto " => $_POST["puestoTrabajador"],
                            "idEstatus " => $_POST["estatusTrabajador"]);
                            var_dump($datos["sexo"]);
                        return false;
                $respuesta = ModeloUsuarios::mdlAddTrabajador($tabla,$datos);

                
                

                if($respuesta == "ok"){
                    echo'<script>
                        Swal.fire({
                            title: "Error!",
                            text: "El Usuario no Puede ir Vacio",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"                        
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

}

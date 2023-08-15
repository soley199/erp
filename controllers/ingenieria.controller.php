<?php 

class ControladorIngenieria{

    static public function ctrMostrarLineaProductos($columna,$valor){
        /* =====================================
        MOSTRAR PROVEEDORES
        ========================================*/
        $tabla = "lineasproductos";
        $respuesta = ModeloIngenieria::mdlMostrarLineaProductos($tabla, $columna, $valor);
        return $respuesta;
    }
    static public function ctrAddLinea(){
        if(isset($_POST["lineaProductoNombre"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/',$_POST["lineaProductoNombre"])){
                $tabla= 'lineasproductos';
                $datos = array("nombre" => $_POST["lineaProductoNombre"], 
                                "descripcion" => $_POST["lineaProductoDescripcion"],
                                "color" => $_POST["lineaProductoColor"]);
                                
                                
                    $respuesta = ModeloIngenieria::mdlAddLineaProductos($tabla,$datos);
                    
                    if($respuesta == "ok"){
                        echo'<script>
                            Swal.fire({
                                title: "'.$datos["nombre"].'",
                                text: "Alta Correcta",
                                icon: "success",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Aceptar"                        
                            }).then((result)=>{
                                if(result.isConfirmed){
                                    window.location = "ing_lineas";
                                }
                            });
                        </script>';
                    } else{
                        var_dump($respuesta);
                    }
            } else{
                echo'<script>
                    Swal.fire({
                        title: "Error!",
                        text: "La Linea no Puede ir Vacia",
                        icon: "error",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"                        
                    }).then((result)=>{
                        if(result.isConfirmed){
                            window.location = "ing_lineas";
                        } else{
                            window.location = "ing_lineas";
                        }
                        });
                    </script>';
            }
        }
    }
     /* =====================================
    EDITAR Lineas
    ========================================*/
    static public function ctrEditLinea(){
        if(isset($_POST["lineaProductoNombreEdita"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["lineaProductoNombreEdita"])){
                $tabla= 'lineasproductos';
                $datos = array("id" => $_POST["idlineaProducto"],
                            "nombre" => $_POST["lineaProductoNombreEdita"],
                            "descripcion" => $_POST["lineaProductoDescripcionEdita"],
                            "color" => $_POST["lineaProductoColorEdita"],
                            "foto" => null);
                            
                $respuesta = ModeloIngenieria::mdlEditLinea($tabla,$datos);
                if($respuesta = "ok"){
                    echo'<script>
                        Swal.fire({
                            title: "Linea '.$datos["nombre"].'",
                            text: "Actualizada!!!",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Aceptar"                        
                        }).then((result)=>{
                            if(result.isConfirmed){
                                window.location = "ing_lineas";
                            }
                        });
                    </script>';
                }else{
                    var_dump($respuesta);
                }

            }else{
                echo'<script>
                        Swal.fire({
                            title: "Error!",
                            text: "El nombre de la linea no Puede ir Vacio o caracteres especiales",
                            icon: "error",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"                        
                        }).then((result)=>{
                            if(result.isConfirmed){
                                window.location = "ing_lineas";
                            } else{
                                window.location = "ing_lineas";
                            }
                        });
                </script>';
            }
        }

    }
    /* =====================================
    ELIMINAR LINEAS
    ========================================*/
    static public function ctrBorrarlinea(){
        if(isset($_GET["idLineaElimina"])){
            $tabla= 'lineasproductos';
            $datos = $_GET["idLineaElimina"];

            // if($_GET["foto"] == "views/assets/images/users/default.jpg"){
            // }else{
            //     unlink($_GET["foto"]);
            //     rmdir('views/trabajadores/'.$_GET["numTarjeta"]);
            // }
            
            $respuesta = ModeloIngenieria::mdlBorrarLinea($tabla,$datos);
                if($respuesta = "ok"){
                    echo'<script>
                        Swal.fire({
                            title: "La Linea '.$_GET["numTarjeta"].'",
                            text: "SE ELIMINO",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Aceptar"                        
                        }).then((result)=>{
                            if(result.isConfirmed){
                                window.location = "ing_lineas";
                            }
                        });
                    </script>';
                }
        }
    }
}
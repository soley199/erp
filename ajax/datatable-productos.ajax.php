<?php 
require_once "../controllers/proveedores.controller.php";
require_once "../models/proveedores.models.php";

class TablaProoductos{
    /*=============================================
	=            Motrar tabla          =
	=============================================*/
    public function mostrarTabalaProductos(){

      $columna = null;
      $valor=null;

      $productosProveedor = ControladorProveedores::ctrMostrarProductos($columna, $valor);

     
      $botones = "<div class='btn-group'><button type='button' data-bs-toggle='modal' data-bs-target='#modalEditarProductoProveedor' class='btn btn-warning btnEditarProductoProveedor' idProductoProveedorEdita=''><i class='mdi mdi-account-edit'></i></button><button type='button' class='btn btn-danger btnEliminarProductoProveedor' idProductoProveedorElimina='' foto=''><i class='mdi mdi-close-circle'></i></button></div>";

      
      // 
      $datosJson = '{
            "data": [';
            for($i = 0; $i < count($productosProveedor); $i++){
              $imagen = "<img src='".$productosProveedor[$i]["foto"]."' width='50px'>";
              $datosJson.= '[
                "'.($productosProveedor[$i]["id"]).'",
                "'.$productosProveedor[$i]["producto"].'",
                "'.$imagen.'",
                "'.$productosProveedor[$i]["proveedor"].'",
                "'.$productosProveedor[$i]["material"].'",
                "'.$productosProveedor[$i]["tipo"].'",
                "'.$productosProveedor[$i]["nomenclatura"].'",
                "'.$productosProveedor[$i]["estatus"].'",
                "'.$botones.'"
              ],';

            }
        $datosJson = substr($datosJson, 0, -1);                  
      $datosJson.='] }';      
      echo $datosJson;
    }
}

/*=============================================
	=            Activar tabla Productos         =
	=============================================*/

    $activaProductos = new TablaProoductos();
    $activaProductos -> mostrarTabalaProductos();
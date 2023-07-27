<?php
// Controllers
require_once "controllers/plantilla.controller.php";
require_once "controllers/usuarios.controller.php";
require_once "controllers/proveedores.controller.php";

// Models
require_once "models/usuarios.models.php";
require_once "models/proveedores.models.php";





$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
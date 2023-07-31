<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <title>Sistema ERP Auto </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="views/assets/images/icon-logo.png" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="views/assets/extra-libs/multicheck/multicheck.css"/>
    <link href="views/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href="views/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="views/dist/css/style.min.css" rel="stylesheet" />
    <link href="views/dist/css/plantilla.css" rel="stylesheet" />

    <link href="views/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" />

    

    <!-- script -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="views/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="views/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="views/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="views/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="views/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="views/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="views/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="views/dist/js/custom.min.js"></script>
    <script src="views/assets/libs/flot/excanvas.js"></script>
    <script src="views/assets/libs/flot/jquery.flot.js"></script>
    <script src="views/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="views/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="views/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="views/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="views/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="views/dist/js/pages/chart/chart-page-init.js"></script>


    <script src="views/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="views/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="views/assets/extra-libs/DataTables/datatables.min.js"></script>
    
    
    
    
   


  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    
      <?php
      if(isset($_SESSION["erp_Sesion"]) && $_SESSION["erp_Sesion"] == true){
      
        echo '<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">';
        include "modulos/arb_cabezera.php";

        include "modulos/arb_menu.php";      

        ?>
        <div class="page-wrapper">
          <?php
          if(isset($_GET["ruta"])){
            if($_GET["ruta"] == "arb_inicio" ||
              $_GET["ruta"] == "ing_Inicio" ||
              $_GET["ruta"] == "arb_salir" ||
              $_GET["ruta"] == "rh_usuarios" ||
              $_GET["ruta"] == "comp_inicio" ||
              $_GET["ruta"] == "comp_proveedores" ||
              $_GET["ruta"] == "comp_productos"  ){
              include "modulos/".$_GET["ruta"].".php";
              ?>
          <?php
            } else{
              include "modulos/arb_404.php";
            }
          } else{
            include "modulos/arb_inicio.php";
          }
          ?>
              
        
        
          <?php 
          include "modulos/arb_footer.php";
          echo '</div>';
      }else{
        include "modulos/login.php";
      }
        ?>

      
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <script src="views/dist/js/plantilla.js"></script>
    <script src="views/dist/js/trabajadores.js"></script>
  </body>
</html>

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tarjetas Ingeniaria</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="ing_inicio">Ingenieria</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tarjetas
                        </li>
                        
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <?php
            $columna = null;
            $valor =  null;
            $LineaProducto = ControladorIngenieria::ctrMostrarLineaProductos($columna,$valor);

            foreach($LineaProducto as $key => $value){
                echo'
                    <div class="col-md-6 col-lg-2 col-xlg-3 ing_listadoTarjetas">
                        <div class="card card-hover btnIdTarejta" nombre="'.$value["nombre"].'" idLinea="'.$value["id"].'">
                            <div class="box '.$value["color"].' text-center">
                                <h1 class="font-light text-white">
                                <i class="mdi mdi-view-dashboard"></i>
                                </h1>
                                <h6 class="text-white">'.$value["nombre"].'</h6>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>
    
</div>
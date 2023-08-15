<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Administrador Productos Proveedores "Compras"</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="comp_inicio">Compras</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Productos</li>
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
    <div class="row">
    <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Productos
                    </h5>
                    <!-- ============================================================== -->
                    <!-- Boton agregar trabajador -->
                    
                    <!-- ============================================================== -->
                    <button class="btn btn-info" id="btnAgregarNuevoProducto">Nuevo Producto</button>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="example" class="display tablaproductosProveedor table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Producto</th>
                                    <th>foto</th>
                                    <th>Proveedor</th>
                                    <th>Material</th>
                                    <th>Tipo Material</th>
                                    <th>Nomenclatura</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <!-- <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Producto</th>
                                    <th>foto</th>
                                    <th>Proveedor</th>
                                    <th>Material</th>
                                    <th>Tipo Material</th>
                                    <th>Nomenclatura</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
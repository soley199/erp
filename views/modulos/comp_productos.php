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
<!-- ============================================================== -->
<!-- Modal agregar PRODUCTO PROVEDOR-->
<!-- ============================================================== -->
<div class="modal fade" id="modalNuevoProductoProveedor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form" id="formNuevoProductoProveedor" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background-color: #3e5569; color:aliceblue">
                    <h5 class="modal-title">Agregar Producto</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
            
                <div class="modal-body row">
                    <div class="col-md-6">
                        <!-- Nombre Producto -->
                        <div class="col-md-12">
                            <label for="Producto" class="form-label fw-bold">Producto </label>
                            <input type="text" class="form-control" name="productoProductoProvedor" placeholder="Producto" require>
                        </div>
                        <!-- Precio Producto-->
                        <div class="col-md-12">
                            <label for="Precio" class="form-label fw-bold">Precio</label>
                            <input type="text" class="form-control" name="precioProductoProvedor" placeholder="Precio" require>
                        </div>
                        <div class="row">
                            <!-- Cantidad Minima-->
                            <div class="col-md-6">
                                <label for="Cantidad Minima" class="form-label fw-bold">Cantidad Minima</label>
                                <input type="number" class="form-control" name="cantidadMinimaProductoProvedor" placeholder="Cantidad Minima" value="0" require>
                            </div>
                            <!-- Tiempo Entrega-->
                            <div class="col-md-6">
                                <label for="Tiempo Entrega" class="form-label fw-bold">Tiempo Entregaa</label>
                                <input type="text" class="form-control" name="tiempoEntregaProductoProvedor" placeholder="Tiempo Entrega" require>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center ">
                        <!-- Foto -->
                        <div class="col-lg-12">
                            <img src="views/assets/images/users/default.jpg" width="200" height="200" class="bd-placeholder-img previsualisar" alt="Foto Producto">
                            <input class="form-control fotoProducto" type="file"  name="fotoProductoProvedor" />
                        </div>
                    </div>
                    
                    <div class="row col-md-12">
                        <!-- Provedor Producto -->
                        <div class="col-md-5">
                            <label for="Proveedor" class="form-label fw-bold">Proveedor</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Buscar Proveedor" disabled>
                                <input type="hidden"class="" >
                                <button class="btn btn-primary" type="button" id="btnBuscarProvedorProductoProvedorNuevo"><i class="mdi mdi-search-web"></i></button>
                                <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
                            </div>
                        </div>
                        <!-- Material -->
                        <div class="col-md-3">
                            <label for="Material" class="form-label fw-bold">Material</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Buscar Material" disabled>
                                <input type="hidden"class="" >
                                <button class="btn btn-primary" type="button" id="btnBuscarMaterialProductoProvedorNuevo"><i class="mdi mdi-search-web"></i></button>
                                <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
                            </div>
                        </div>
                        <!-- Tipo Material -->
                        <div class="col-md-4">
                            <label for="Tipo Material" class="form-label fw-bold">Tipo Material</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Buscar Tipo Material" disabled>
                                <input type="hidden"class="" >
                                <button class="btn btn-primary" type="button" id="btnBuscarTipoMaterialProductoProvedorNuevo"><i class="mdi mdi-search-web"></i></button>
                                <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Nomenclatura -->
                        <label for="Nomenclatura" class="form-label fw-bold">Nomenclatura</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar Nomenclatura" disabled>
                            <input type="hidden"class="" >
                            <button class="btn btn-primary" type="button" id="btnBuscarNomenclaturaProductoProvedorNuevo"><i class="mdi mdi-search-web"></i></button>
                            <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Unidad Medida -->
                        <label for="Unidad Medida" class="form-label fw-bold">Unidad Medida</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar Unidad Medida" disabled>
                            <input type="hidden"class="" >
                            <button class="btn btn-primary" type="button" id="btnBuscarUnidadMedidaProductoProvedorNuevo"><i class="mdi mdi-search-web"></i></button>
                            <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                <?php
                    // $addUsuario = new ControladorUsuarios();
                    // $addUsuario -> ctrAddUsuario();
                ?>
            </form>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- Modal Mostrar Tabla Provedores -->
<!-- ============================================================== -->
<div class="modal fade" id="modalTablaProvedoresProductoProvedorNuevo" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #3e5569; color:aliceblue">
                <h5 class="modal-title">Lista Proveedores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <table class="table table-hover table-striped dt-responsive tableEditaBuscarAMBNNP" width="100%"> -->
                <table class="table " width="100%"> 
                    <thead>
                        <th>N°</th>
                        <th>ITEM</th>
                        <th>Codigo AMB</th>
                        <th>Codigo FMSI</th>
                        <th>Selecciona</th>
                    </thead>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <label>Proveedor</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-sticky-note-o"></i></span>
                        <input type="text" class="form-control" id="" placeholder="Selecciona en la tabla" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Guardar</button>
            </div>
        </div>
    </div>
</div>



<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Lineas de Producto</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="arb_inicio">Home</a></li>
                        <li class="breadcrumb-item"><a href="ing_inicio">Ingeniaria de Producto</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Lineas de Producto
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
    <dic class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Trabajadores
                    </h5>
                    <!-- ============================================================== -->
                    <!-- Boton agregar Linea -->
                    <!-- ============================================================== -->
                    <button class="btn btn-info" id="btnAgregarNuevaLinea">Nueva Linea</button>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="tablas table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>color</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $columna = null;
                                $valor =  null;
                                $Lineas = ControladorIngenieria::ctrMostrarLineaProductos($columna,$valor);
                                
                                foreach($Lineas as $key =>$value){
                                    echo '
                                    <tr>
                                        <td>'.$value["id"].'</td>
                                        <td>'.$value["nombre"].'</td>
                                        <td>'.$value["descripcion"].'</td>
                                        
                                        <td>'.$value["color"].'</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalEditarLinea" class="btn btn-warning btnEditarLinea" idLinea="'.$value["id"].'"><i class="mdi mdi-account-edit" ></i></button>
                                                <button type="button" class="btn btn-danger btnEliminarLinea" idLinea="'.$value["id"].'" foto="'.$value["foto"].'" ><i class="mdi mdi-close-circle"></i></button>
                                            </div>
                                        </td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </dic>
</div>
<!-- ============================================================== -->
<!-- Ventana Agregar Lineas -->
<!-- ============================================================== -->
<div class="modal fade" id="modalAgregarLinea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form" id="formNuevaLinea" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background-color: #3e5569; color:aliceblue">
                    <h5 class="modal-title">Alta Nueva Linea de Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="row col-md-12">
                        <!-- Nombre Linea -->
                        <div class="col-md-6">
                            <label for="Linea" class="form-label fw-bold">Linea</label>
                            <input type="text" class="form-control" name="lineaProductoNombre" placeholder="Nombre Linea" require>
                        </div>
                        <!-- Color -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label fw-bold">Color</label>
                            <select  class="form-select" name="lineaProductoColor" require>
                            <option selected value="">Selecciona un Color</option>
                            <option  value="bg-success">Verde</option>
                            <option  value="bg-danger">Rojo</option>
                            <option  value="bg-warning">Amarillo</option>
                            <option  value="bg-info">Azul Marino</option>
                            <option  value="bg-cyan">Azul claro</option>
                            <option  value="bg-primary">Morado</option>
                            </select>
                        </div>
                    </div>
                    <!-- Descripcion -->
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea2" name="lineaProductoDescripcion" style="height: 100px"></textarea>
                            <label class="fw-bold" style="color: black;" for="floatingTextarea2">Descripción</label>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                <?php
                    $addLinea = new ControladorIngenieria();
                    $addLinea -> ctrAddLinea();
                ?>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Ventana Editar Lineas -->
<!-- ============================================================== -->
<div class="modal fade" id="modalEditarLinea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form" id="formEditarLinea" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background-color: #3e5569; color:aliceblue">
                    <h5 class="modal-title">Cambios Linea Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <div class="modal-body row">
                    <div class="row col-md-12">
                        <!-- Nombre Linea -->
                        <div class="col-md-6">
                            <label for="Linea" class="form-label fw-bold">Linea</label>
                            <input type="text" class="form-control" id="lineaProductoNombreEdita" name="lineaProductoNombreEdita" placeholder="Nombre Linea" require>
                            <input type="hidden" name="idlineaProducto" id="idlineaProducto" namespace="idlineaProducto">
                        </div>
                        <!-- Color -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label fw-bold">Color</label>
                            <select  class="form-select" id="lineaProductoColorEdita" name="lineaProductoColorEdita" require>
                            <option selected value="">Selecciona un Color</option>
                            <option  value="bg-success">Verde</option>
                            <option  value="bg-danger">Rojo</option>
                            <option  value="bg-warning">Amarillo</option>
                            <option  value="bg-info">Azul Marino</option>
                            <option  value="bg-cyan">Azul claro</option>
                            <option  value="bg-primary">Morado</option>
                            </select>
                        </div>

                    </div>
                    <!-- Descripcion -->
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="form-floating">
                            <textarea class="form-control"  id="lineaProductoDescripcionEdita" name="lineaProductoDescripcionEdita" style="height: 100px"></textarea>
                            <label class="fw-bold" style="color: black;" for="floatingTextarea2">Descripción</label>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                <?php
                    $editLinea = new ControladorIngenieria();
                    $editLinea -> ctrEditLinea();
                ?>
            </form>
        </div>
    </div>
</div>
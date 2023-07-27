<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Proveedores</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="comp_inicio">Compras</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
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
                        Trabajadores
                    </h5>
                    <!-- ============================================================== -->
                    <!-- Boton agregar PROVEEDOR -->
                    <!-- ============================================================== -->
                    <button class="btn btn-info" id="btnAgregarNuevoProveedor">Nuevo Proveedor</button>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="tablas table table-striped  dataTable" style="width:100%" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Proveedor</th>
                                    <th>Localidad</th>
                                    <th>Calificacion</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $columna = null;
                                $valor =  null;
                                $Porveedores = ControladorProveedores::ctrMostrarProveedores($columna,$valor);
                                
                                foreach($Porveedores as $key =>$value){
                                    echo '
                                    <tr>
                                        <td>1</td>
                                        <td>'.$value["proveedor"].'</td>
                                        <td>'.$value["localidad"].'</td>
                                        <td>'.$value["calificacion"].'</td>';
                                        if($value["estatus"] == "Activo"){
                                            echo '<td><button type="button" class="btn btn-success btn-sm text-white">'.$value["estatus"].'</button></td>';
                                        }else{
                                            echo '<td><button type="button" class="btn btn-danger btn-sm text-white">'.$value["estatus"].'</button></td>';
                                        }
                                        echo'
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalEditarPorveedor" class="btn btn-warning btnEditarPorveedor" idPorveedor="'.$value["id"].'"><i class="mdi mdi-account-edit" ></i></button>
                                                <button type="button" class="btn btn-danger btnEliminarPorveedor" idPorveedor="'.$value["id"].'"><i class="mdi mdi-close-circle"></i></button>
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
    </div>    
</div>
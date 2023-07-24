<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Administracion de Trabajadores "Recursos Humanos"</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="arb_inicio">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trabajadores</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
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
                    <!-- Boton agregar trabajador -->
                    <!-- ============================================================== -->
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalAgregarTrabajador">Nuevo Trabajador</button>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="tablas table table-striped  dataTable" style="width:100%" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>#Tarjeta</th>
                                    <th>Nombre Completo</th>
                                    <th>Sexo</th>
                                    <th>Puesto</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $columna = null;
                                $valor =  null;
                                $Trabajadores = ControladorUsuarios::ctrMostrarTrabajadores($columna,$valor);
                                
                                foreach($Trabajadores as $key =>$value){
                                    echo '
                                    <tr>
                                        <td>1</td>
                                        <td>'.$value["numTarjeta"].'</td>
                                        <td>'.$value["nombre"].'</td>
                                        <td>'.$value["sexo"].'</td>
                                        <td>'.$value["puesto"].'</td>';
                                        if($value["estatus"] == "Activo"){
                                            echo '<td><button type="button" class="btn btn-success btn-sm text-white">'.$value["estatus"].'</button></td>';
                                        }else{
                                            echo '<td><button type="button" class="btn btn-danger btn-sm text-white">'.$value["estatus"].'</button></td>';
                                        }
                                        echo'
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning" idTrabajador="'.$value["id"].'"><i class="mdi mdi-account-edit" data-bs-toggle="modal" data-bs-target="#"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="mdi mdi-close-circle"></i></button>
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

<!-- ============================================================== -->
<!-- Venta Agregar Usuarios -->
<!-- ============================================================== -->
<div class="modal fade" id="modalAgregarTrabajador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background-color: #3e5569; color:aliceblue">
                    <h5 class="modal-title">Alta Trabajador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <div class="modal-body row">
                    <div class="col-md-6">
                        <!-- Nombre -->
                        <div class="col-md-12">
                            <label for="Nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" name="nombreTrabajador" placeholder="Nombre" require>
                        </div>
                        <!-- Apellidos -->
                        <div class="col-md-12">
                            <label for="Apellidos" class="form-label fw-bold">Apellidos</label>
                            <input type="text" class="form-control" name="apellidosTrabajador" placeholder="Apellidos" require>
                        </div>

                    </div>
                    <div class="col-md-6 text-center ">
                        <!-- Foto -->
                        <div class="col-lg-12">
                            <img src="views/assets/images/users/default.jpg" width="140" height="140" class="bd-placeholder-img previsualisar" alt="Foto Trabajador">
                            <input class="form-control fotoTrabajador" type="file" id="" name="fotoTrabajador" />
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <!-- Contraseña -->
                        <div class="col-md-6">
                        <label for="Contraseña" class="form-label fw-bold">Contraseña</label>
                            <input type="password" class="form-control" name="passTrabajador" placeholder="Contraseña" require>
                        </div>
                        <!-- Perfil -->
                        <div class="col-md-4">
                            <label for="inputCity" class="form-label fw-bold">Perfil Sistema</label>
                            <input type="text" class="form-control" name="perfilSistemaTrabajador" placeholder="Perfil">
                        </div>
                        <!-- Sexo -->
                        <div class="col-md-2">
                        <br>
                            <input class="form-check-input" type="radio" name="sexoTrabajadorHombre">
                            <label class="form-check-label fw-bold" for="flexRadioDefault1">
                                Hombre
                            </label>
                            <br>
                            <input class="form-check-input" type="radio" name="sexoTrabajadorMujer">
                            <label class="form-check-label fw-bold" for="flexRadioDefault1">
                                Mujer
                            </label>
                        </div>
                    </div>
                    <!-- Puesto -->
                    <div class="col-md-5">
                        <label for="inputState" class="form-label fw-bold">Puesto</label>
                        <select id="inputState" class="form-select" name="puestoTrabajador" require>
                        <option selected value="">Selecciona Puesto</option>
                        <?php
                                $verPuesto = ControladorUsuarios::ctrBuscarPuesto();
                                foreach ($verPuesto as $key => $value) {
                                echo '
                                    <option value="'.$value["id"].'">'.$value["puesto"].'</option>
                                ';
                                }
                        ?>
                        </select>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <label for="inputState" class="form-label fw-bold">Estatus</label>
                        <select id="inputState" class="form-select" name="estatusTrabajador" require>
                        <option selected value="">Selecciona Estatus</option>
                        <?php
                                $verEstatus = ControladorUsuarios::ctrBuscarEstatusTrabajador();
                                foreach ($verEstatus as $key => $value) {
                                echo '
                                    <option value="'.$value["id"].'">'.$value["estatus"].'</option>
                                ';
                                }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                <?php
                    $addUsuario = new ControladorUsuarios();
                    $addUsuario -> ctrAddUsuario();
                ?>
            </form>
        </div>
    </div>
</div>

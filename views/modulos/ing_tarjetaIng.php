<?php
/*=============================================
=                       =
=============================================*/
if (isset($_GET["nombre"])) {
// echo "<script>";
// echo '  $(document).ready(function(){
//         activaTap("'.$_GET["Tab"].'");
//         });
//      ';
// echo "</script>";
// echo "<script>";
// echo 'alert("'.$_GET["nombre"].'");';
// echo "</script>";
}
 ?>

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title fs-2 fw-bold"><?php echo $_GET["nombre"]; ?></h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="ing_inicio">Ingenieria</a></li>
                        <li class="breadcrumb-item"><a href="ing_listadoTarjetas">Tarjetas Ingeniaria</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET["nombre"]; ?></li>
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
    
    <div class="row text-center">
        <nav>
            <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                <!-- ============================================================== -->
                <!-- FLASH - POSITIVO TAB INICIO  -->
                <!-- ============================================================== -->
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-flash" type="button" role="tab" aria-controls="nav-flash" aria-selected="true">FLASH - POSITIVO</button>
                <!-- ============================================================== -->
                <!-- MODELO POSITIVO MULTIPLE TAB INICIO  -->
                <!-- ============================================================== -->
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-multiple" type="button" role="tab" aria-controls="nav-multiple" aria-selected="false">MODELO POSITIVO MULTIPLE</button>
                <!-- ============================================================== -->
                <!-- Accesorios / Empaque TAB INICIO  -->
                <!-- ============================================================== -->
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-empaque" type="button" role="tab" aria-controls="nav-empaque" aria-selected="false">ACCESORIOS / EMPAQUE</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
                <!-- ============================================================== -->
                <!-- FLASH - POSITIVO TAB CONTENIDO  -->
                <!-- ============================================================== -->
            <div class="tab-pane fade show active" id="nav-flash" role="tabpanel" aria-labelledby="nav-flash-tab">
                <br>
                <div class="row">
                    <div class="col-md-2 bg-light" style="border-radius: 15px;">Número AMB
                        <p class="fw-bold">7573 D465</p>
                    </div>
                    <div class="col-md-2">ITEM
                        <p class="fw-bold">049</p>
                    </div>
                    <div class="col-md-2 bg-light" style="border-radius: 15px;">Tipo Prensado
                        <p class="fw-bold">Flash</p>
                    </div>
                    <div class="col-md-2 " style="border-radius: 15px;">Estatus <br>
                        <p class="fw-bold badge bg-success">Disponible</p>
                    </div>
                    <div class="col-md-2 bg-light" style="border-radius: 15px;" >Línea
                        <p class="fw-bold"></p>
                    </div>
                    <div class="col-md-2">Fecha Actualizacion
                        <p class="fw-bold">2022-06-20</p>
                    </div>                  
                </div>
                <br>
                <!-- ============================================================== -->
                <!-- FLASH - POSITIVO TAB Informacion ZAPATA -->
                <!-- ============================================================== -->
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">1) Informacion Zapata</p>                    
                        <div class="col-md-4">
                            <p class="text-center">INTERIOR</p>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th class="fw-light">Proveedor</th>
                                        <th class="fw-light">IL</th>
                                        <th class="fw-light">IR</th>
                                        <th class="fw-light">Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                </tbody>
                                
                            </table>
                            <p>Imagen Muestra</p>
                            <div>
                                <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                    <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                </a>
                            </div> 

                        </div>   
                        <div class="col-md-4">
                            <p class="text-center">EXTERIOR</p>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th class="fw-light">Proveedor</th>
                                        <th class="fw-light">IL</th>
                                        <th class="fw-light">IR</th>
                                        <th class="fw-light">Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Imagen Muestra</p>
                            <div>
                                <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                    <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center ">Nota</p>
                            <div>
                                <a href="views/tarjetaIng/pdf/ITEM001.pdf" target="_blank">
                                    <img src="views/assets/images/pdf.png" alt="ITEM001" width="50px" height="50px">
                                </a>
                            </div>
                            <table width="100%" border="" class="table table-light">
                                <thead>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col">Nota</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">General</td>
                                        <td>Antes de Procesar verificar que el adhesivo este del lado correcto de la zapata.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">2) Información Granalla</p>
                        <div><p class="fw-bold badge bg-success fs-5">SI Aplica</p></div>
                    </div>
                    <div class="col-md-2">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">3) Información adhesivo</p>
                        <div><p class="fw-bold badge bg-success fs-5">SI Aplica</p></div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Parametro de Adhesivo</p>
                        <div><p class="fw-bold">Espesor de la capa: 0.002" +/- 0.001" </p></div>
                    </div>
                    <div class="col-md-5">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">Información de espesores M. Positivo</p>
                        <div>
                            <table width="100%">
                                <tr>
                                    <th>Interior (Prensa M.Positivo)</th>
                                    <th>Exterior (Prensa M.Positivo)</th>
                                </tr>
                                <tr>
                                    <td>Espesor Nominal: -00.000</td>
                                    <td>Espesor Minimo: -0.010</td>
                                </tr>
                                <tr>
                                    <td>Espesor Nominal: -00.000</td>
                                    <td>Espesor Minimo: -0.010</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                
                </div>
                <br>
                <!-- ============================================================== -->
                <!-- PREFORMAS -->
                <!-- ============================================================== -->
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">4) Información de Preforma</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Formula Aprobada:</p>
                            <p class="fw-bold badge bg-info fs-5">N4MPW-G</p>
                        </div>
                        <div class="col-md-6">
                            <p>Status del peso:</p>
                            <p class="fw-bold badge bg-success fs-5">Liberado</p>
                        </div>
                    </div>
                    <div class="row">
                        <table width="100%">
                            <tr>
                                <th class="fw-light">PREFORMA INTERIOR</th>
                                <th class="fw-light">PREFORMA EXTERIOR</th>
                                <th class="fw-light">REFERENCIA  DE PARAMETROS DE AJUSTE</th>
                            </tr>
                            <tr class="bg-light">
                                <td class="fw-bold">Peso (grs): 220</td>
                                <td class="fw-bold">Peso (grs): 220</td>
                                <td class="fw-bold">Tiempo: 1</td>
                            </tr>
                            <tr class="bg-light">
                                <td class="fw-bold">Backing (grs): 15</td>
                                <td class="fw-bold">Peso (grs): 15</td>
                                <td class="fw-bold">Ventileo: 1</td>
                            </tr>
                            <tr class="bg-light">
                                <td class="fw-bold">Molde Interior: 7715 D840</td>
                                <td class="fw-bold">Molde Exterior: Mismo Molde a usar</td>
                                <td class="fw-bold">Presión: 1</td>
                            </tr>
                            <tr class="bg-light">
                                <td class="fw-bold">Ubicacion: C8</td>
                                <td class="fw-bold">Ubicacion: C8</td>
                                <td class="fw-bold">Sacudidas: 0</td>
                            </tr>
                        </table>
                    </div>         
                </div>
                <br>
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">5) Información de Prensa Flash / Prensa Moldeo Positivo</p>
                    <div class="col-md-4">
                        <table width="100%">
                            <tr>
                                <th colspan="2">Información de herramental Interior</th>
                            </tr>
                            <tr class="bg-light">
                                <td>Moldes disponibles:</td>
                                <td class="fw-bold">1</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Molde a usar:</td>
                                <td class="fw-bold">D269-7179-I</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Ubicación:</td>
                                <td class="fw-bold">A2</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Número de cavidades:</td>
                                <td class="fw-bold">8</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Espesor total del molde:</td>
                                <td class="fw-bold">0.710"</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Área de pastilla:</td>
                                <td class="fw-bold">9.31 SQ.IN</td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-md-4">
                        <table width="100%">
                            <tr>
                                <th colspan="2">Información de herramental Exterior</th>
                            </tr>
                            <tr class="bg-light">
                                <td>Moldes disponibles:</td>
                                <td class="fw-bold">1</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Molde a usar:</td>
                                <td class="fw-bold">D269-7179-O</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Ubicación:</td>
                                <td class="fw-bold">A2</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Número de cavidades:</td>
                                <td class="fw-bold">8</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Espesor total del molde:</td>
                                <td class="fw-bold">0.530"</td>
                            </tr>
                            <tr class="bg-light">
                                <td>Área de pastilla:</td>
                                <td class="fw-bold">10.07 SQ.IN</td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-md-2">
                        <p class="text-center ">Nota</p>
                            <div>
                                <a href="views/tarjetaIng/pdf/ITEM001.pdf" target="_blank">
                                    <img src="views/assets/images/pdf.png" alt="ITEM001" width="50px" height="50px">
                                </a>
                            </div>
                    </div> 
                    <div class="col-md-2">
                        <table width="100%">
                            <tr>
                                <th >Especificaciones: Pruebasde laboratorio</th>
                            </tr>
                            <tr class="bg-light">
                                <td>Gravedad especifica: <br> <span class="fw-bold">2.20 +/-0.10</span></td>
                            </tr>
                            <tr class="bg-light">
                                <td>Dureza GOGAN: <br> <span class="fw-bold">50 +/-15</span></td>
                            </tr>
                            <tr class="bg-light">
                                <td>Desprendimiento mínimo: <br> <span class="fw-bold">400 min.</span></td>
                            </tr>

                        </table>
                    </div>                
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">6) Información de horneado</p>
                        <div>
                            <p class="fw-bold badge bg-success fs-5">SI Aplica</p>
                            <p>Ver: Tiempos de rampa para curado de horno</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">8) Información de Escorchado</p>
                        <div>
                            <!--  -->
                            <table width="100%">
                                <tr>
                                    <td ROWSPAN=2><p class="fw-bold badge bg-success fs-5">SI Aplica</p></td>
                                    <td>Velocidad: (HZ): 12+ 3/-2</td> 
                                </tr>
                                <tr>
                                    <td>Temperatura: 500° C +/-100°C </td> 
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">7) Información de Rectificado</p>
                        <div>
                            <table >
                                <!-- <tr>
                                    <th >Especificaciones: Pruebasde laboratorio</th>
                                </tr> -->
                                <tr class="fw-bold">
                                    <td colspan="2">Tolerancia: -0.015"/ -0.020" de espesor M. Positivo</td>
                                </tr>
                                <tr class="fw-bold">
                                    <td colspan="2">Tolerancia: +0.010"/ -0.015" de espesor Flash</td>
                                </tr>
                                <tr class="fw-bold">
                                    <td colspan="2">Planicidad: 0.010" MAX</span></td>
                                </tr>
                                <tr>
                                    <td class="bg-secondary" style="color: #fff">Espesor nominal balata interior:</td>
                                    <td class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">0.594</td>
                                </tr>
                                <tr>
                                    <td>Espesor máximo:</td>
                                    <td>0.604</td>
                                </tr>
                                <tr>
                                    <td>Espesor mínimo:</td>
                                    <td>0.579</td>
                                </tr>
                                <tr>
                                    <td>Use escantillón:</td>
                                    <td>7/ Esmeril sup. Planas</td>
                                </tr>
                                <tr>
                                    <td class="bg-secondary" style="color: #fff">Espesor nominal balata exterior:</td>
                                    <td class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">0.565</td>
                                </tr>
                                <tr>
                                    <td>Espesor máximo:</td>
                                    <td>0.575</td>
                                </tr>
                                <tr>
                                    <td>Espesor mínimo:</td>
                                    <td>0.55</td>
                                </tr>
                                <tr>
                                    <td>Use escantillón:</td>
                                    <td>7/ Esmeril sup. Planas</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="col-md-8">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">9) Información de Ranura y Chaflán</p>
                        <div class="row">
                            <div class="col-md-6">
                                <table width="100%">
                                    <tr>
                                        <td>Ranura (espacio entre zapata y ranura)</td>
                                    </tr>
                                    <tr>
                                        <td>Tolerancia: 0.125" +/-0.10"</td>
                                    </tr>
                                    <tr>
                                        <td><p class="fw-bold badge bg-success fs-5">SI Aplica</p></td>
                                    </tr>
                                </table>
                                <p>Balata Interior</p>
                                <div>
                                    <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                        <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                    </a>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">Chaflán: <p class="fw-bold badge bg-success fs-5">SI Aplica</p></td>
                                    </tr>
                                    <tr>
                                        <td>Medida</td>
                                        <td>Tolerancia: +/-0.015"</td>
                                    </tr>
                                    <tr>
                                        <td>Interior: <span>0.480"</span></td>
                                        <td rowspan="2">ángulo: <br><span>20°-25°</span></td>
                                    </tr>
                                    <tr>
                                        <td>Exterior: 0.454"</td>
                                    </tr>
                                </table>
                                <p>Balata exterior</p>
                                <div>
                                    <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                        <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"><p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">10) Información de Baño en alcohol</p>
                        <div><p class="fw-bold badge bg-success fs-5">SI Aplica</p></div>
                    </div>
                    <div class="col-md-4"><p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">11) Información de Pintura electrostática</p>
                        <div><p class="fw-bold fs-5">Espesor de la capa: 0.002"+/-0.001"</p></div>
                    </div>
                    <div class="col-md-4"><p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">12) Información de Pintura de fricción</p>
                        <div><p class="fw-bold badge bg-danger fs-5">NO Aplica</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">13) Información de Codificado</p>
                        <div>
                            <table width="100%">
                                <tr>
                                    <td colspan="2">Codificado en: <span class="fw-bold fs-5">Shim</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Tipo de negrilla: <span class="fw-bold fs-5">Asigar</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"> Tipo de matriz: <span class="fw-bold fs-5">Asigar</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Tamaño del mensaje</td>
                                </tr>
                                <tr>
                                    <td class="bg-secondary" style="color: #fff">Balata Interior</td>
                                    <td class="bg-secondary" style="color: #fff">Balata Exterior</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold fs-5">8 cm X 7 mm</td>
                                    <td class="fw-bold fs-5">8 cm X 7 mm</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="fw-bold">Se estampa como:</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <table width="100%" border>
                            <tr>
                                <td>Tamaño de rodillo (cm):</td>
                                <td><p class="fw-bold badge bg-danger fs-7">NO Aplica</p></td>
                            </tr>
                            <tr>
                                <td>Identificación de rodillo:</td>
                                <td><p class="fw-bold badge bg-danger fs-7">NO Aplica</p></td>
                            </tr>
                        </table>                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- MOLDEO  POSITIVO MULTIPLE TAB CONTENIDO  -->
            <!-- ============================================================== -->    
            <div class="tab-pane fade" id="nav-multiple" role="tabpanel" aria-labelledby="nav-multiple-tab">
                <br>
                <div class="row">
                    <div class="col-md-2 bg-light" style="border-radius: 15px;">Número AMB
                        <p class="fw-bold">7573 D465</p>
                    </div>
                    <div class="col-md-2">ITEM
                        <p class="fw-bold">049</p>
                    </div>
                    <div class="col-md-2 bg-light" style="border-radius: 15px;">Tipo Prensado
                        <p class="fw-bold">Flash</p>
                    </div>
                    <div class="col-md-2 " style="border-radius: 15px;">Estatus <br>
                        <p class="fw-bold badge bg-success">Disponible</p>
                    </div>
                    <div class="col-md-2 bg-light" style="border-radius: 15px;" >Línea
                        <p class="fw-bold"></p>
                    </div>
                    <div class="col-md-2">Fecha Actualizacion
                        <p class="fw-bold">2022-06-20</p>
                    </div>                  
                </div>
                <br>
                <!-- ============================================================== -->
                <!-- FLASH - POSITIVO TAB Informacion ZAPATA -->
                <!-- ============================================================== -->
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">1) Informacion Zapata</p>                    
                        <div class="col-md-4">
                            <p class="text-center">INTERIOR</p>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th class="fw-light">Proveedor</th>
                                        <th class="fw-light">IL</th>
                                        <th class="fw-light">IR</th>
                                        <th class="fw-light">Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                </tbody>
                                
                            </table>
                            <p>Imagen Muestra</p>
                            <div>
                                <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                    <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                </a>
                            </div> 

                        </div>   
                        <div class="col-md-4">
                            <p class="text-center">EXTERIOR</p>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th class="fw-light">Proveedor</th>
                                        <th class="fw-light">IL</th>
                                        <th class="fw-light">IR</th>
                                        <th class="fw-light">Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="fw-bold">Util</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold">U-D21</td>
                                        <td class="fw-bold"><a href="#" target="_blank">Img</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Imagen Muestra</p>
                            <div>
                                <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                    <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center ">Nota</p>
                            <div>
                                <a href="views/tarjetaIng/pdf/ITEM001.pdf" target="_blank">
                                    <img src="views/assets/images/pdf.png" alt="ITEM001" width="50px" height="50px">
                                </a>
                            </div>
                            <table width="100%" border="" class="table table-light">
                                <thead>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col">Nota</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">General</td>
                                        <td>Antes de Procesar verificar que el adhesivo este del lado correcto de la zapata.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">2) Información Granalla</p>
                        <div><p class="fw-bold badge bg-success fs-5">SI Aplica</p></div>
                    </div>
                    <div class="col-md-5">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">3) Información adhesivo</p>
                        <div><p class="fw-bold badge bg-success fs-5">SI Aplica</p></div>
                    </div>
                </div>
                <br>
                <!-- ============================================================== -->
                <!-- PREFORMAS -->
                <!-- ============================================================== -->
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">4) Información de Moldeo Positivo Multiple</p>
                    <p class="text-center rounded-pill" style="background-color: #FFC34D;color: black;border-radius: 15px;">Especificaciones "Pruebas de Laboratorio"</p>
                    <div class="col-md-4"><p class="fw-bold fs-5">Gravedad especifica: 2.20 +/-0.10</p></div>
                    <div class="col-md-4"><p class="fw-bold fs-5">Dureza GOGAN: 35 (+15/-10)</p></div>
                    <div class="col-md-4"><p class="fw-bold fs-5">Desprendimiento  minimo: 400 min.</p></div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <table width="100%">
                            <tr>
                                <td  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">BALATA INTERIOR</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Formula asignada: <span style="color: black;">4100-M</span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Estatus del peso: <span style="color: black;">LIBERADO</span></td>
                            </tr>
                            <tr>
                                <td>Peso (grs).: <span class="fw-bold" style="color: black;">165</span></td>
                            </tr>
                            <tr>
                                <td>Peso (Underlayer).: <span class="fw-bold" style="color: black;">0</span></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary" style="color: #fff">ESPESORES DE PROCESO "PRENSADO"</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Espesor nominal: <span class="fw-bold" style="color: black;">0.590</span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Espesor minimo: <span class="fw-bold" style="color: black;">0.580</span></td>
                            </tr>
                            <tr>
                                <td>Moldes disponibles: <span class="fw-bold" style="color: black;">1 (Positivo multiple)</span></td>
                            </tr>
                            <tr>
                                <td>Use Molde: <span class="fw-bold" style="color: black;">D021-755</span></td>
                            </tr>
                            <tr>
                                <td>Ubicación: <span class="fw-bold" style="color: black;">A7</span></td>
                            </tr>
                            <tr>
                                <td>No. Cavidades: <span class="fw-bold" style="color: black;">20</span></td>
                            </tr>
                            <tr>
                                <td>área de pastilla: <span class="fw-bold" style="color: black;">___</span></td>
                            </tr>
                        </table>
                        
                    </div>
                    <div class="col-md-4">
                        <table width="100%">
                            <tr>
                                <td  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">BALATA INTERIOR</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Formula asignada: <span style="color: black;">4100-M</span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Estatus del peso: <span style="color: black;">LIBERADO</span></td>
                            </tr>
                            <tr>
                                <td>Peso (grs).: <span class="fw-bold" style="color: black;">165</span></td>
                            </tr>
                            <tr>
                                <td>Peso (Underlayer).: <span class="fw-bold" style="color: black;">0</span></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary" style="color: #fff">ESPESORES DE PROCESO "PRENSADO"</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Espesor nominal: <span class="fw-bold" style="color: black;">0.590</span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: green;border-radius: 15px;">Espesor minimo: <span class="fw-bold" style="color: black;">0.580</span></td>
                            </tr>
                            <tr>
                                <td>Moldes disponibles: <span class="fw-bold" style="color: black;">1 (Positivo multiple)</span></td>
                            </tr>
                            <tr>
                                <td>Use Molde: <span class="fw-bold" style="color: black;">D021-755</span></td>
                            </tr>
                            <tr>
                                <td>Ubicación: <span class="fw-bold" style="color: black;">A7</span></td>
                            </tr>
                            <tr>
                                <td>No. Cavidades: <span class="fw-bold" style="color: black;">20</span></td>
                            </tr>
                            <tr>
                                <td>área de pastilla: <span class="fw-bold" style="color: black;">___</span></td>
                            </tr>
                        </table>                        
                    </div>
                    <div class="col-md-4">
                        <table width="100%">
                            <tr>
                                <td colspan="3"  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Temperaturas (°C)</td>
                            </tr>
                            <tr>
                                <td  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Platina superior</td>
                                <td  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Molde</td>
                                <td  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Platina inferior</td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Compresión Kg/cm2</td>
                            </tr>
                            <tr>
                                <td  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;"></td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%">
                            <tr>
                                <td class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Ciclos (S)</td>
                            </tr>
                            <tr>
                                <td  class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md 6"><p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">5) Aplica horneado</p>
                        <div><p class="fw-bold badge bg-danger fs-5">NO Aplica</p></div>
                    </div>
                    <div class="col-md 6">
                        <p class="fw-bold fs-5">Tolerancia: -0.015"/ -0.020" de espesor FMSI <br><span>Planicidad: 0.010" MAX</span></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">6) Información de Rectificado OCTOPUS</p>
                    <div class="col-md-6">
                        <table width="100%">
                            <tr>
                                <td colspan="2" class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">BALATA INTERIOR</td>
                            </tr>
                            <tr>
                                <td class="" >Espesor nominal balata interior: <span class="fw-bold fs-4" style="color:black;">0.575</span></td>
                            </tr>
                                <td>Espesor mínimo: <span class="fw-bold" style="color: black;">0.570</span></td>
                            </tr>
                            </tr>
                                <td>Use escantillón: <span class="fw-bold" style="color: black;">1, 1B/ Esmeril sup. Planas/94</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table width="100%">
                            <tr>
                                <td colspan="2" class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">BALATA EXTERIOR</td>
                            </tr>
                            <tr>
                                <td class="" >Espesor nominal balata interior: <span class="fw-bold fs-4" style="color:black;">0.575</span></td>
                            </tr>
                                <td>Espesor mínimo: <span class="fw-bold" style="color: black;">0.570</span></td>
                            </tr>
                            </tr>
                                <td>Use escantillón: <span class="fw-bold" style="color: black;">1, 1B/ Esmeril sup. Planas/94</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">7) Información de Ranura y Chaflán OCTOPUS</p>
                    <div class="col-md-6">
                        <table width="100%">
                            <tr>
                                <td >Ranura (espacio entre zapata y ranura)</td>
                                <td class="bg-secondary" style="color: #fff">Tolerancia: 0,125"+/-0,010"</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><p class="fw-bold badge bg-success fs-5">SI Aplica</p></td>
                            </tr>
                        </table>
                        <p class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;"> BALATA INTERIOR</p>
                        <div>
                            <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                            </a>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <table width="100%">
                            <tr>
                                <td rowspan="2">Chaflán: <p class="fw-bold badge bg-success fs-5">SI Aplica</p></td>
                                <td colspan="3">Angulo: <p class="fw-bold badge bg-success fs-5">SI Aplica</p></td>
                                
                            </tr>
                            <tr>
                                <td colspan="3" class="bg-secondary" style="color: #fff"> Tolerancia: +/-0.015"</td>
                                <!-- <td><p class="fw-bold badge bg-success fs-5">SI Aplica</p></td> -->
                            </tr>
                            <tr>
                                <td class="bg-secondary" style="color: #fff">Medida: </td>
                                <td>Interior: <p class="fw-bold badge bg-danger fs-5">NO Aplica</p></td>
                                <td>Exterior: <p class="fw-bold badge bg-danger fs-5">NO Aplica</p></td>
                            </tr>
                        </table>
                        <p class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;"> BALATA EXTERIOR</p>
                        <div>
                            <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                            </a>
                        </div> 
                    </div>                    
                </div>
                <br>
                <div class="row">
                    <div class="col-md 3">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">8) Aplica escorchado</p>
                        <div><p class="fw-bold badge bg-danger fs-5">NO Aplica</p></div>
                    </div>
                    <div class="col-md 3">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">9) Aplica baño de alcohol</p>
                        <div><p class="fw-bold badge bg-danger fs-5">NO Aplica</p></div>
                    </div>
                    <div class="col-md 3">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">10) Información de Pintura electrostática</p>
                        <div><p class="fw-bold fs-5">Espesor de la capa: 0.002"+/-0.001"</p></div>
                    </div>
                    <div class="col-md 3">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">11) Información de Pintura de fricción</p>
                        <div><p class="fw-bold badge bg-danger fs-5">NO Aplica</p></div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">12) Información de Codificado</p>
                        <div>
                            <table width="100%">
                                <tr>
                                    <td colspan="2">Codificado en: <span class="fw-bold fs-5">Shim</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Tipo de negrilla: <span class="fw-bold fs-5">Asigar</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"> Tipo de matriz: <span class="fw-bold fs-5">Asigar</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Tamaño del mensaje</td>
                                </tr>
                                <tr>
                                    <td class="bg-secondary" style="color: #fff">Balata Interior</td>
                                    <td class="bg-secondary" style="color: #fff">Balata Exterior</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold fs-5">8 cm X 7 mm</td>
                                    <td class="fw-bold fs-5">8 cm X 7 mm</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="fw-bold">Se estampa como:</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <table width="100%" border>
                            <tr>
                                <td>Tamaño de rodillo (cm):</td>
                                <td><p class="fw-bold badge bg-danger fs-7">NO Aplica</p></td>
                            </tr>
                            <tr>
                                <td>Identificación de rodillo:</td>
                                <td><p class="fw-bold badge bg-danger fs-7">NO Aplica</p></td>
                            </tr>
                        </table>                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Accesorios / Empaque TAB CONTENIDO  -->
            <!-- ============================================================== -->  
            <div class="tab-pane fade" id="nav-empaque" role="tabpanel" aria-labelledby="nav-empaque-tab">
                <br>
                <div class="row">
                    <div class="col-md-2 bg-light" style="border-radius: 15px;">Número AMB
                        <p class="fw-bold">7573 D465</p>
                    </div>
                    <div class="col-md-2">ITEM
                        <p class="fw-bold">049</p>
                    </div>
                    <div class="col-md-2 bg-light" style="border-radius: 15px;">Tipo Prensado
                        <p class="fw-bold">Flash</p>
                    </div>
                    <div class="col-md-2 " style="border-radius: 15px;">Estatus <br>
                        <p class="fw-bold badge bg-success">Disponible</p>
                    </div>
                    <div class="col-md-2 bg-light" style="border-radius: 15px;" >Línea
                        <p class="fw-bold"></p>
                    </div>
                    <div class="col-md-2">Fecha Actualizacion
                        <p class="fw-bold">2022-06-20</p>
                    </div>                  
                </div>
                <br>
                <div class="row">
                    <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">13) Información de accesorios</p>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="bg-secondary" style="color: #fff">Balata Interior</p>
                                <div>
                                    <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                        <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="bg-secondary" style="color: #fff">Balata Exterior</p>
                                <div>
                                    <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                        <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="bg-secondary" style="color: #fff">Descripción del armado de juego</p>
                            <p class="fw-bold fs-5" style="color:black">
                                2 Balatas interiores con clip pistón, 1 balata exterior con clip exterior y sensor de desgaste izquierdo, 1
                                balata exterior con clip exterior y sensor de desgaste derecho,
                            </p>
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-6"><span style="color: black" class="fw-bold">TIPO DE SHIM A USAR:</span>
                                <p class="fw-bold badge bg-danger fs-5">NO Aplica</p>
                                <table width="100%">
                                    <tr>
                                        <td colspan="2" class="bg-secondary" style="color: #fff">Shim Interior</td>
                                        <td colspan="2" class="bg-secondary" style="color: #fff">Shim Exterior</td>
                                    </tr>
                                    <tr>
                                        <td>Nucap:</td>
                                        <td class="fw-bold" style="color:black">SM10340-SLT</td>
                                        <td>Nucap:</td>
                                        <td class="fw-bold" style="color:black">SM10340-SLT</td>
                                    </tr>
                                    <tr>
                                        <td>Util:</td>
                                        <td class="fw-bold" style="color:black">30.8169.</td>
                                        <td>Util:</td>
                                        <td class="fw-bold" style="color:black">30.8169.</td>
                                    </tr>
                                    <tr>
                                        <td>Kenneth:</td>
                                        <td class="fw-bold" style="color:black">GSMD021</td>
                                        <td>Kenneth:</td>
                                        <td class="fw-bold" style="color:black">GSMD021</td>
                                    </tr>
                                    <tr>
                                        <td>Pac:</td>
                                        <td class="fw-bold" style="color:black">No Disponible</td>
                                        <td>Pac:</td>
                                        <td class="fw-bold" style="color:black">No Disponible</td>
                                    </tr>
                                    <tr>
                                        <td>Jida:</td>
                                        <td class="fw-bold" style="color:black">JSM021</td>
                                        <td>Jida:</td>
                                        <td class="fw-bold" style="color:black">JSM021</td>
                                    </tr>
                                    <tr>
                                        <td>Xinlida:</td>
                                        <td class="fw-bold" style="color:black">SHM1982-S52</td>
                                        <td>Xinlida:</td>
                                        <td class="fw-bold" style="color:black">SHM1982-S52</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                <p class="fw-bold fs-6" style="background-color: blue;color: #fff;border-radius: 15px;">El kit Abutment clip se coloca en planta según procedimiento</p>
                                    <div class="col-md-4">
                                        <br>
                                        <br>
                                        <p class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Remachar Shim: <span class="fw-bold" style="color:black">X</span></p>
                                        <p class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Plantilla: <span class="fw-bold" style="color:black">X</span></p>
                                        <p class="fw-bold" style="background-color: #FFFFFF;color: blue;border-radius: 15px;">Presión: <span class="fw-bold" style="color:black">X</span></p>                                        
                                    </div>
                                    <div class="col-md-8">
                                        <table width="100%">
                                            <tr>
                                                <td colspan="2" class="bg-secondary" style="color: #fff"> Información de Abutment Clip</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Aplica: <p class="fw-bold badge bg-danger fs-5">NO Aplica</p></td>
                                            </tr>
                                            <tr>
                                                <td>IBI Carlson: <span class="fw-bold" style="color:black">X</span></td>
                                            </tr>
                                            <tr>
                                                <td>Kenneth: <span class="fw-bold" style="color:black">X</span></td>
                                            </tr>
                                            <tr>
                                                <td>Nucap: <span class="fw-bold" style="color:black">X</span></td>
                                            </tr>
                                            <tr>
                                                <td>Xinlida: <span class="fw-bold" style="color:black">X</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="bg-secondary" style="color: #fff">Accesorios Interior</p>
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">Accesorio #1: <p class="fw-bold badge bg-success fs-6">SI Aplica</p></td>
                                        <td colspan="2">Accesorio #2: <p class="fw-bold badge bg-danger fs-6">NO Aplica</p></td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">Accesorio #3: <p class="fw-bold badge bg-danger fs-6">NO Aplica</p></td>
                                        <td colspan="2">Accesorio #4: <p class="fw-bold badge bg-danger fs-6">NO Aplica</p></td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <p class="bg-secondary" style="color: #fff">Accesorios Exterior</p>
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">Accesorio #5: <p class="fw-bold badge bg-danger fs-6">NO Aplica</p></td>
                                        <td colspan="2">Accesorio #6: <p class="fw-bold badge bg-danger fs-6">NO Aplica</p></td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">Accesorio #7: <p class="fw-bold badge bg-danger fs-6">NO Aplica</p></td>
                                        <td colspan="2">Accesorio #8: <p class="fw-bold badge bg-danger fs-6">NO Aplica</p></td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <p class="text-center rounded-pill" style="background-color: #FFFFFF;color: #D61203;border-radius: 15px;">14) Información de Empaque</p>
                            <div class="col-md-6">
                                <div>
                                    <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                        <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                    </a>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <table width="100%">
                                    <tr>
                                        <td># de poliolefina: <span>6</span></td>
                                    </tr>
                                    <tr>
                                        <td># de Caja a usar: <span>n/a</span></td>
                                    </tr>
                                    <tr>
                                        <td>Acomodo de camas: </td>
                                    </tr>
                                    <tr>
                                        <td>No exceder 600 kg como peso máximo</td>
                                    </tr>
                                    <tr>
                                        <td>Peso promedio del juego: <span>0.510</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>     
                    <br>               
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Ayuda Visual</p>
                                <div>
                                    <a href="views/img_zapata/ITEM_001_I_O.JPG" target="_blank">
                                        <img src="views/img_zapata/ITEM_001_I_O.JPG" class="img-fluid" alt="ITEM001">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <table width="100%">
                            <tr>
                                    <td class="bg-secondary" style="color: #fff">Acotaciones Accesorios</td>
                                </tr>
                                <tr>
                                    <td>Nucap: <span class="fw-bold">NU/ A-/ NE/ W</span></td>
                                </tr>
                                <tr>
                                    <td>Util: <span class="fw-bold">CTD</span></td>
                                </tr>
                                <tr>
                                    <td>Sadeca: <span class="fw-bold">STI, BS, CFR, SP</span></td>
                                </tr>
                                <tr>
                                    <td>Kenneth: <span class="fw-bold">GS</span></td>
                                </tr>
                                <tr>
                                    <td>Otro: <span class="fw-bold">Daico/ Nacional/ Queltro</span></td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div class="row">
                            <p class="bg-danger fs-3" style="color: #fff" > NOTAS ACCESORIOS </p>
                            <p class="fw-bold fs-5" style="color:black">Se podra adaptar ya con previa autorizacion de Ing. de Producto; sensor A-494-S ó J-509-S, CTD-3M6 (adaptados); Shim 20204 Pac;
                                OJO: No son equivalentes. sin embargo se puede utilizar. Se puede colocar shim 20204 (cerrar ligeramente las pestañas para mejo</p>
                            <p class="bg-danger fs-4" style="color: #fff" >TODO EL  SHIM DEBRE LLEVAR ADHESIVO O IR REMACHADO SEGUN DISEÑO. 2023-07-10</p>
                            <p class="fw-bold fs-4" style="background-color: blue;color: #fff;border-radius: 15px;">Especificaciones de empaque/ embarque</p>
                            <p class="fw-bold" style="color:black">
                                a) Tarima propiedad del clientebr 
                                <br> 
                                b) Usar cajas nuevas (multijuegos ó master)
                                <br>
                                c) Se podrán colocar hasta 5 números de parte en una tarima, siempre y cuando sean solo 2 cajas por número, ejemplo: En una tarima caben 9 cajas multijuegos, 4 no. de 2 cajas y 1 no. de 1 caja
                                <br>
                                d) Si el no. parte sobrepasa las 2 cajas deberá de ir solo 1 no. por tarima
                                <br>
                                e) El pallet deberá de ir emplayado
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
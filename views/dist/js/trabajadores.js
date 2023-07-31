/*=============================================
=Trabajadores=
=============================================*/
// Botones Apertura de Modales
$("#btnAgregarNuevoTrabajador").click(function(){
    $("#formNuevoTrabajador")[0].reset();
    $('#modalAgregarTrabajador').modal('show');
});



// Subiendo foto trabajador
$(".fotoTrabajador").change(function(){
    var imagen = this.files[0];
    // VALIDA SI ES JPG O PNG
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".fotoTrabajador").val("");
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'La foto debe ser formato PNG / JPEG'
        });
        // VALIDA TAMAÑO DE 5 MB
    }else if(imagen["size"] > 5242880){
        $(".fotoTrabajador").val("");
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'No debe de pesar mas de 5 mb'
        });        
    }else{
        // VISUALIZAMOS IAMGEN EN EL FORMULARIO
        var  datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(e){
            var rutaImagen = e.target.result;
            $(".previsualisar").attr("src", rutaImagen);
        })
    }
});

//Editar Trabajador 
$(".tablas").on("click", ".btnEditarTrabajador", function(){
    $("#formEditarTrabajador")[0].reset();
    var idTrabajador = $(this).attr("idTrabajador");

    var datos = new FormData();
    datos.append("idTrabajador", idTrabajador);
    
    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log("respuesta", respuesta);
            $("#idtrabajadorEditar").val(respuesta["id"]);
            $("#numTarjetaActual").val(respuesta["numTarjeta"]);
            $("#nombreTrabajadorEditar").val(respuesta["nombre"]);
            $("#apellidosTrabajadorEditar").val(respuesta["apellido"]);
            $("#perfilSistemaTrabajadorEdita").val(respuesta["sistemaPerfil"]);
            $("#passTrabajadorEditar").val(respuesta["password"]);
            $("#puestoTrabajadorEdita").html(respuesta["puesto"]);
            $("#puestoTrabajadorEdita").val(respuesta["idPuesto"]);
            $("#estatusTrabajadorEdita").html(respuesta["estatus"]);
            $("#estatusTrabajadorEdita").val(respuesta["idEstatus"]);

            if(respuesta["sexo"] == "H"){
                $("#sexoTrabajadorHombreEditar").prop('checked', true);
            }else{
                $("#sexoTrabajadorMujerEditar").prop('checked', true);
            }
            $(".previsualisar").attr("src",respuesta["foto"]);
            $("#fotoTrabajadorActual").val(respuesta["foto"]);
        }
    }); 
});
/*=============================================
=ELIMINAR Trabajador=
=============================================*/
$(".tablas").on("click", ".btnEliminarTrabajador", function(){
    idTrabajador = $(this).attr("idTrabajador");
    foto = $(this).attr("foto");
    numTarjeta = $(this).attr("numTarjeta");

    Swal.fire({
        title: 'Esta seguro de borrar al trabjador - '+numTarjeta,
        text: "Se perdera toda su información",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {

                window.location ="index.php?ruta=rh_usuarios&idTrabajador="+idTrabajador+"&numTarjeta="+numTarjeta+"&foto="+foto;

                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
            }
        })
})
/*=============================================
=Fin Trabajadores=
=============================================*/
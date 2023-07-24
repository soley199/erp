/*=============================================
	=GENERARL=
	=============================================*/
$(".tablas").DataTable();


/*=============================================
=Trabajadores=
=============================================*/
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
$(".btnEditarTrabajador").click(function(){
    var idTrabajador = $(this).attr("idTrabajador");
    console.log(idTrabajador);
});

/*=============================================
=Fin Trabajadores=
=============================================*/
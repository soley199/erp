
/*=============================================
=MOSTRAR TAREJTA INGENIERIA =
=============================================*/

$(".ing_listadoTarjetas").on("click", ".btnIdTarejta", function(){
    nombre = $(this).attr("nombre");
    id = $(this).attr("idLinea");

    window.location ="index.php?ruta=ing_tarjetaIng&nombre="+nombre+"&id="+id;

    
})

/*=============================================
=LINIA PRODUCTOS  =
=============================================*/
// BRIR MODAL NUEVA LINEA
$("#btnAgregarNuevaLinea").click(function(){
    $("#formNuevaLinea")[0].reset();
    $('#modalAgregarLinea').modal('show');
});



//Editar lINEA
$(".tablas").on("click", ".btnEditarLinea", function(){
    
    $("#formEditarLinea")[0].reset();
    var idLinea = $(this).attr("idLinea");
    // alert(idLinea);

    var datos = new FormData();
    datos.append("idLinea", idLinea);
    
    $.ajax({
        url: "ajax/ingenieria.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log("respuesta", respuesta);
            $("#idlineaProducto").val(respuesta["id"]);
            $("#lineaProductoNombreEdita").val(respuesta["nombre"]);
            $("#lineaProductoDescripcionEdita").val(respuesta["descripcion"]);
            $("#lineaProductoColorEdita").html(respuesta[""]);
            $("#lineaProductoColorEdita").val(respuesta["color"]);
        }
    }); 
});
/*=============================================
=TABLA PRODUCTOS PROVEEDORES=
=============================================*/

$.ajax({
    url:"ajax/datatable-productos.ajax.php",
    success:function(respuesta){
        console.log("respuesta", respuesta);
    }
})

var tablaproductosProveedor =$(".tablaproductosProveedor").DataTable({

    "language": {

        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

    },
    ajax: 'ajax/datatable-productos.ajax.php'
    // initComplete: function () {
    //     this.api().columns().every( function () {
    //         var column = this;
    //         var select = $('<select><option value=""></option></select>')
    //             .appendTo( $(column.footer()).empty() )
    //             .on( 'change', function () {
    //                 var val = $.fn.dataTable.util.escapeRegex(
    //                     $(this).val()
    //                 );
    //                 column
    //                     .search( val ? '^'+val+'$' : '', true, false )
    //                     .draw();
    //             } );

    //         column.data().unique().sort().each( function ( d, j ) {
    //             select.append( '<option value="'+d+'">'+d+'</option>' )
    //         } );
    //    } );
    // }

});

/*=============================================
=   TABLA SELECICON COLUMNA BSUCADOR      =
=============================================*/

$("#btnAgregarNuevoProducto").click(function(){
    $("#formNuevoProductoProveedor")[0].reset();
    $('#modalNuevoProductoProveedor').modal('show');
});


// Previsualizar foto Producto
$(".fotoProducto").change(function(){
    var imagen = this.files[0];
    // VALIDA SI ES JPG O PNG
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".fotoProducto").val("");
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'La foto debe ser formato PNG / JPEG'
        });
        // VALIDA TAMAÑO DE 5 MB
    }else if(imagen["size"] > 5242880){
        $(".fotoProducto").val("");
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


// VISUALIZAMOS IAMGEN EN EL FORMULARIO
$("#btnBuscarProvedorProductoProvedorNuevo").click(function(){
    // $("#formNuevoProductoProveedor")[0].reset();
    $('#modalTablaProvedoresProductoProvedorNuevo').modal('show');
    // alert("Provedor");
});

// VISUALIZAMOS IAMGEN EN EL FORMULARIO
$("#btnBuscarMaterialProductoProvedorNuevo").click(function(){
    // $("#formNuevoProductoProveedor")[0].reset();
    // $('#modalNuevoProductoProveedor').modal('show');
    alert("Material");
});
// VISUALIZAMOS IAMGEN EN EL FORMULARIO
$("#btnBuscarTipoMaterialProductoProvedorNuevo").click(function(){
    // $("#formNuevoProductoProveedor")[0].reset();
    // $('#modalNuevoProductoProveedor').modal('show');
    alert("Tipo Material");
});
// VISUALIZAMOS IAMGEN EN EL FORMULARIO
$("#btnBuscarNomenclaturaProductoProvedorNuevo").click(function(){
    // $("#formNuevoProductoProveedor")[0].reset();
    // $('#modalNuevoProductoProveedor').modal('show');
    alert("Nomenclatura");
});
// VISUALIZAMOS IAMGEN EN EL FORMULARIO
$("#btnBuscarUnidadMedidaProductoProvedorNuevo").click(function(){
    // $("#formNuevoProductoProveedor")[0].reset();
    // $('#modalNuevoProductoProveedor').modal('show');
    alert("UnidadMedida");
});

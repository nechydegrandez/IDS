$(document).ready(function(){

    $('#btn-agregar-devolucion').click(function(){

        var parametros = "Empresa: " + $('#slc-empresa-devolucion').val() + " & " + " Sucursal: " + $('#slc-sucursal').val() + " & " + " Fecha_Devolucion: " + $('#txt-fecha-devolucion').val();

        alert(parametros);

    });

    $('#btn-agregar-producto-devolucion').click(function(){

        var parametros = "producto: " + $('#slc-productos-devolucion').val() + " & " + "cantidad: " + $('#txt-cantidad-producto-devuelto').val();
        
        alert(parametros);

    })

    /* $('').click(function(){

    }); */

});
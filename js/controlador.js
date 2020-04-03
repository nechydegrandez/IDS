$(document).ready(function(){

    $('#btn-agregar-devolucion').click(function(){

        var parametros = "empresa: " + $('#slc-empresa-devolucion').val() + " & " + " sucursal: " + $('#slc-sucursal').val() + " & " + " fecha_devolucion: " + $('#txt-fecha-devolucion').val();

        alert(parametros);

    });

    $('#btn-agregar-producto-devolucion').click(function(){

        var parametros = "producto: " + $('#slc-productos-devolucion').val() + " & " + "cantidad: " + $('#txt-cantidad-producto-devuelto').val();
        
        alert(parametros);

    })

});
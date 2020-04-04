$(document).ready(function(){

    $('#btn-agregar-devolucion').click(function(){

        var parametros = "Empresa: " + $('#slc-empresa-devolucion').val() + " & " + " Sucursal: " + $('#slc-sucursal').val() + " & " + " Fecha_Devolucion: " + $('#txt-fecha-devolucion').val();

        alert(parametros);

    });

    $('#btn-agregar-producto-devolucion').click(function(){

        var parametros = "producto: " + $('#slc-productos-devolucion').val() + " & " + "cantidad: " + $('#txt-cantidad-producto-devuelto').val();
        
        alert(parametros);

    })

    $.ajax({
        url:"ajax/api.php?accion=obtener-lista-empresas",
        method: "get",
        dataType: "json",
        success:function(respuesta){
            for(var i=0; i<respuesta.length; i++){
                $("#slc-empresa-devolucion").append(
                    '<option value="'+respuesta[i].RTN+'">'+respuesta[i].nombreEmpresa+'</option>'
                );
            }
        },
        error:function(e){
            console.log(e);
        }
    });

});
$(document).ready(function(){


    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-empresas",
        type: "GET",
        dataType: 'json',
        success:function(response){
            console.log(response);
            for(var i=0;i<response.length;i++){
                $('#slc-empresa-devolucion').append('<option value="'+response[i].RTN+'">'+response[i].nombreEmpresa+'</option>');
            }   
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url:"ajax/api.php?accion=obtener-lista-empresas",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for(var i=0;i<respuesta.length;i++){
                $('#slc-empresa').append('<option value="'+respuesta[i].RTN+'">'+respuesta[i].nombreEmpresa+'</option>');
            }
        },
        error:function(e){
            alert("Algo esta fallando");
            console.log(e);
        }
    });


    $('#btn-agregar-devolucion').click(function(){

        var parametros = "Empresa: " + $('#slc-empresa-devolucion').val() + " & " + " Sucursal: " + $('#slc-sucursal').val() + " & " + " Fecha_Devolucion: " + $('#txt-fecha-devolucion').val() + " & " + "Total_Devolucion: " + $("#txt-total-devolucion").val() + " & " + "Estado: " + $("#slc-estado-devolucion").val();

        alert(parametros);

    });
    

});
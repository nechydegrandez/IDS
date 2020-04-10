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
        url:"ajax/api.php?accion=obtener-lista-devoluciones",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            console.log(respuesta);
            for(var i=0;i<respuesta.length;i++){
                $('#body-devoluciones').append(
                    '<tr>'+
                    '<td class="text-center">'+respuesta[i].nombreTienda+'</td>'+
                    '<td class="text-center">'+respuesta[i].fechaDevolucion+'</td>'+
                    '<td class="text-center"> L. '+respuesta[i].total+'</td>'+
                    '<td class="text-center">'+
                    '<select name="slc-estado" id="slc-estado" class="form-control">'+
                    '<option value="Pendiente">Pendiente</option>'+
                    '<option value="Recogida">Recogida</option>'+
                    '</select></td>'+
                    '<td><button class="btn btn-link btn-sm">Informe Devolucion</button></td>'+
                    '</tr>'
                );
                

            }
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-sucursales",
        type: "GET",
        dataType: 'json',
        success:function(response){
            console.log(response);
            for(var i=0;i<response.length;i++){
                $('#slc-sucursal-devolucion').append('<option value="'+response[i].idSucursal+'">'+response[i].nombreTienda+'</option>');
            }   
        },
        error:function(e){
            console.log(e);
        }
    });


    $('#btn-agregar-devolucion').click(function(){

        var parametros = "Sucursal=" + $('#slc-sucursal-devolucion').val() + "&" + "Total_Devolucion=" + $("#txt-total-devolucion").val() + "&" + "Estado=" + $("#slc-estado-devolucion").val() + "&" + "Fecha_Devolucion=" + $("#txt-fecha-devolucion").val();


        $.ajax({
            url: "ajax/api.php?accion=agregar-devolucion",
            method: "POST",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                console.log(respuesta);
                alert("Informacion enviada exitosamente");
                location.reload();
            },
            error:function(e){
                console.log(e);
            }
        });

    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-productos",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            console.log(respuesta);
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-productos",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            console.log(respuesta);
            for(var i=0; i<respuesta.length;i++){
                $('#slc-productos-pedido').append(
                    '<option value="'+respuesta[i].idProductos+'">'+respuesta[i].nombre+'('+respuesta[i].nombreEmpresa+')</option>'
                );
            }    
            
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-sucursales",
        type: "GET",
        dataType: 'json',
        success:function(response){
            console.log(response);
            for(var i=0;i<response.length;i++){
                $('#slc-sucursal-pedido').append('<option value="'+response[i].idSucursal+'">'+response[i].nombreTienda+'</option>');
            }   
        },
        error:function(e){
            console.log(e);
        }
    });
    

});
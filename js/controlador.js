$(document).ready(function(){


    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-empresas",
        type: "GET",
        dataType: 'json',
        success:function(response){
            for(var i=0;i<response.length;i++){
                $('#slc-empresa-devolucion').append('<option value="'+response[i].idEmpresa+'">'+response[i].nombreEmpresa+'</option>');
            }   
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-empresas",
        type: "GET",
        dataType: 'json',
        success:function(response){
            for(var i=0;i<response.length;i++){
                $('#slc-empresa').append('<option value="'+response[i].idEmpresa+'">'+response[i].nombreEmpresa+'</option>');
            }   
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-empresas",
        type: "GET",
        dataType: 'json',
        success:function(response){
            for(var i=0;i<response.length;i++){
                $('#slc-empresa-sucursal').append('<option value="'+response[i].idEmpresa+'">'+response[i].nombreEmpresa+'</option>');
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
            for(var i=0;i<respuesta.length;i++){
                $('#body-devoluciones').append(
                    '<tr>'+
                    '<td class="text-left">'+respuesta[i].nombreTienda+'</td>'+
                    '<td class="text-center">'+respuesta[i].fechaDevolucion+'</td>'+
                    '<td class="text-center"> L. '+respuesta[i].total+'</td>'+
                    '<td class="text-center">'+
                    '</tr>'
                );
            }
            
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url:"ajax/api.php?accion=obtener-lista-inventario-productos",
        method:"GET",
        dataType:"json",
        success:function(respuesta){
            for(var i=0;i<respuesta.length;i++){
                $('#table-inventario-producto').append(
                    '<tr id="'+respuesta[i].idinventario_Producto+'">'+
                    '<td class="text-center"><span>'+respuesta[i].Productos_idProductos+'</span></td>'+
                    '<td class="text-center"><span id="nombreProducto">'+respuesta[i].nombre+'</span></td>'+
                    '<td class="text-center"><span id="nombreProducto">'+respuesta[i].nombreEmpresa+'</span></td>'+
                    '<td class="text-center"><span id="cantidadBandejas">'+respuesta[i].cantidadBandejas+'</span></td>'+
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
        var total  = document.getElementById('txt-total-devolucion').value;
   
        let soloNumeros = /[0-9]{9,12}$/;
         if (!soloNumeros.test(total)){
            alert ("solo numero!")

        } else 
        if($("#txt-total-devolucion").val() == "" || $("#txt-fecha-devolucion").val() == "" || $('#slc-sucursal-devolucion').val() == "" || $("#slc-estado-devolucion").val() == ""){
            alert("Campos invalidos o vacios. Por favor llenar la informacion como se le pide");
        }
        else{

        $.ajax({
            url: "ajax/api.php?accion=agregar-devolucion",
            method: "POST",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                alert("Informacion enviada exitosamente");
                location.reload();
            },
            error:function(e){
                console.log(e);
            }
        });
    }

    });
//agregar pedido
$('#btn-agregar-devolucion').click(function(){

    var parametros = "Sucursal=" + $('#slc-sucursal-devolucion').val() + "&" + "Total_Devolucion=" + $("#txt-total-devolucion").val() + "&" + "Estado=" + $("#slc-estado-devolucion").val() + "&" + "Fecha_Devolucion=" + $("#txt-fecha-devolucion").val();

    if($("#txt-total-devolucion").val() == "" || $("#txt-fecha-devolucion").val() == "" || $('#slc-sucursal-devolucion').val() == "" || $("#slc-estado-devolucion").val() == ""){
        alert("Campos invalidos o vacios. Por favor llenar la informacion como se le pide");
    }
    else{

    $.ajax({
        url: "ajax/api.php?accion=agregar-devolucion",
        method: "POST",
        data: parametros,
        dataType: "json",
        success:function(respuesta){
            alert("Informacion enviada exitosamente");
            location.reload();
        },
        error:function(e){
            console.log(e);
        }
    });
}

});


//obtener pedidos
$.ajax({
    url:"ajax/api.php?accion=obtener-lista-pedidos",
    method: "GET",
    dataType: "json",
    success:function(respuesta){
        for(var i=0;i<respuesta.length;i++){
            $('#body-pedidos').append(
                '<tr>'+
                '<td class="text-left">'+respuesta[i].idPedidos+'</td>'+
                '<td class="text-center">'+respuesta[i].fechaPedido+'</td>'+
                '<td class="text-center">'+respuesta[i].fechaLimite+'</td>'+
                '<td class="text-center"> L. '+respuesta[i].totalPedido+'</td>'+
                '<td class="text-center"> '+respuesta[i].nombreTienda+'</td>'+
                '<td class="text-center">'+
                '</tr>'
            );
        }
        
    },
    error:function(e){
        console.log(e);
    }
});


//
    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-productos",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
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
        url: "ajax/api.php?accion=obtener-lista-productos",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for(var i=0; i<respuesta.length;i++){
                $('#slc-productos-factura').append(
                    '<option value="'+respuesta[i].idProductos+'">'+respuesta[i].idProductos+'</option>'
                );
            }    
            
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-municipios",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for(var i=0; i<respuesta.length;i++){
                $('#slc-municipio-sucursal').append(
                    '<option value="'+respuesta[i].idMunicipio+'">'+respuesta[i].nombreMunicipio+'</option>'
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
            for(var i=0;i<response.length;i++){
                $('#slc-sucursal-pedido').append('<option value="'+response[i].idSucursal+'">'+response[i].nombreTienda+'</option>');
            }   
        },
        error:function(e){
            console.log(e);
        }
    });

    

    /*$.ajax({
        url: "ajax/api.php?accion=obtener-lista-facturas",
        method: "get",
        dataType: "json",
        success:function(respuesta){
            for (var i=0;i<respuesta.length;i++){
                $('#table-facturas').append('<tr>'+
                '<td class="text-center" id="codigo-pedido">'+respuesta[i].idPedidos+'</td>'+
                '<td class="text-center">'+respuesta[i].nombreTienda+'</td>'+
                '<td class="text-center">'+respuesta[i].fechaPedido+'</td>'+
                '<td class="text-center"> L. '+respuesta[i].totalPedido+'</td>'+
                '<td class="text-center"><button type="button" class="btn btn-link" id="btn-imprimir-factura-'+[i]+'">Imprimir</button></td>'+
              '</tr>');

              $('#btn-imprimir-factura-'+[i]+'').click(function(){
                var parametros = JSON.stringify(respuesta);
                alert(parametros.idPedidos);

              });
            }
            
           
        
        },
        error:function(e){
            console.log(e);
        }
    });*/

    $.ajax({
        url:"ajax/api.php?accion=obtener-lista-insumos",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for (var i=0;i<respuesta.length;i++){
                $('#slc-codigo-insumo').append('<option value="'+respuesta[i].idInsumos+'">'+respuesta[i].nombreInsumo+'</option>');
            }
        },
        error:function(e){
            console.log(e);
        }
    });

    $.ajax({
        url:"ajax/api.php?accion=obtener-inventario-insumos",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for (var i=0;i<respuesta.length;i++){
                $('#body-insumos').append('<tr>'+
                '<th class="text-center">'+respuesta[i].idInventario_Insumos+'</th>'+
                '<td class="text-center">'+respuesta[i].nombreInsumo+'</td>'+
                '<td class="text-center">'+respuesta[i].fechaLlegada+'</td>'+
                '<td class="text-center">'+respuesta[i].cantidad+'</td>'+
                '</tr>');
            }
        },
        error:function(e){
            console.log(e);
        }
    });

    $('#btn-añadir-insumo').click(function(){
        var parametros = "Insumo=" + $('#slc-codigo-insumo').val() + "&" + "FechaAdquisicion=" + $('#txt-fecha-adquisicion').val() + "&" + "Cantidad=" + $('#txt-cantidad').val();



        $.ajax({
            url: "ajax/api.php?accion=agregar-inventario-insumos",
            method: "POST",
            data: parametros,
            dataType:"JSON",
            success:function(respuesta){
                alert("Informacion enviada exitosamente");
                location.reload();
            },
            error:function(e){
                console.log(e);
            }
        });
    });

    /*$('#btn-modificar-estado').click(function(){
        var parametros = "Personas" + $('#slc-personas').val() + "&" + "Estado=" + $('#slc-estado-persona').val();


    });*/

    $.ajax({
        url:"ajax/api.php?accion=obtener-lista-sucursales",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for(var i=0;i<respuesta.length;i++){
                $('#body-sucursales').append(
                    '<tr>'+
                    '<td class="text-center">'+respuesta[i].nombreTienda+'</td>'+
                    '<td class="text-center">'+respuesta[i].nombreEmpresa+'</td>'+
                    '<td class="text-center">'+respuesta[i].nombreMunicipio+'</td>'+
                    '<td class="text-center">'+respuesta[i].telefonoTienda+'</td>'+
                    '<td class="text-center">'+respuesta[i].Gerente+'</td>'+
                    '</tr>'
                )
            }
        },
        error:function(e){
            console.log(e);
        }
    });

    

    $('#btn-agregar-sucursal').click(function(){
         var parametros = "Sucursal=" + $('#txt-nombre-sucursal').val() + "&" + "Municipio=" + $('#slc-municipio-sucursal').val() + "&" + "Empresa=" + $('#slc-empresa-sucursal').val() + "&" + "Telefono=" + $('#txt-telefono-tienda').val() + "&" + "Gerente=" + $('#txt-nombre-gerente').val();
//estas son las validaciones 
        var nombresucursal = document.getElementById('txt-nombre-sucursal').value;
        var telefono = document.getElementById('txt-telefono-tienda').value;
        let soloTexto = /[A-Za-z ñ]+/;
        let soloNumeros = /[0-9]{9,12}$/;
        if (nombresucursal==''){
            alert("Nombre Vacio");
        }
        else if (!soloTexto.test(nombresucursal)) {
            alert ("solo texto!")
        }else if (!soloNumeros.test(telefono)){
            alert ("solo numero!")

        } else {

       
        
         alert(parametros);

        $.ajax({
            url: "ajax/api.php?accion=agregar-nueva-sucursal",
            method: "POST",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                alert("Sucursal añadida correctamente");
                location.reload();
            },
            error:function(e){
                console.log(e);
            }
        }); 
    }
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-sucursales",
        method: "GET",
        dataType: 'json',
        success:function(response){
            for(var i=0;i<response.length;i++){
                $('#slc-editar-sucursal').append('<option value="'+response[i].idSucursal+'">'+response[i].nombreTienda+'</option>');
            }   
        },
        error:function(e){
            console.log(e);
        }
    });

    $('#btn-registrar-empresa').click(function(){
        var parametros = "Nombre=" + $('#txt-nombre-empresa').val() + "&" + "RTN=" + $('#txt-RTN-empresa').val() + "&" + "Direccion=" + $('#txt-direccion-principal-empresa').val();

        $.ajax({
            url: "ajax/api.php?accion=agregar-nueva-empresa",
            method: "POST",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                alert('Empresa agregada exitosamente');
                location.reload();
            },
            error:function(e){
                console.log(e);
            }
            
        });
        
    });

    $('#btn-registrar-insumo').click(function(){
        var parametros = "Nombre=" + $('#txt-nombre-insumo').val() + "&" + "Precio=" + $('#txt-precio-insumo').val() + "&" + "Proveedor=" + $('#txt-proveedor-insumo').val();

        if( $('#txt-nombre-insumo').val() == "" || $('#txt-precio-insumo').val() == "" || $('#txt-proveedor-insumo').val()==""){
            alert("Por favor llenar todos los campos antes de enviar el formulario");
        }

        else{
            $.ajax({
                url: "ajax/api.php?accion=agregar-nuevo-insumo",
                method: "POST",
                data: parametros,
                dataType: "json",
                success:function(respuesta){
                    alert("Insumo agregado exitosamente");
                    location.reload();
                },
                error:function(e){
                    console.log(e);
                }            
            });
        }
        
        

    });

    $('#btn-registrar-producto').click(function(){
        var parametros = "Nombre=" + $('#txt-nombre-producto').val() + "&" + "Codigo=" + $('#txt-codigo-producto').val() + "&" + "Precio=" + $('#txt-precio-producto').val() + "&" + "Empresa=" + $('#slc-empresa').val();
        
        if($('#txt-nombre-producto').val() == "" || $('#txt-codigo-producto').val() == "" || $('#txt-precio-producto').val() == "" || $('#slc-empresa').val()==""){
            alert("Por favor llenar toda la informacion antes de enviar el formulario");
        }
        else{
            $.ajax({
                url: "ajax/api.php?accion=agregar-nuevo-producto",
                method: "POST",
                data: parametros,
                dataType: "json",
                success:function(respuesta){
                    alert("Producto agregado exitosamente");
                    location.reload();
                },
                error:function(e){
                    console.log(e);
                }        
            });
        }

        
    });

    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-empresas",
        method: "GET",
        dataType: "JSON",
        success:function(respuesta){
            for(var i=0;i<respuesta.length;i++){
                $('#slc-empresa-factura').append('<option value="'+respuesta[i].idEmpresa+'">'+respuesta[i].nombreEmpresa+'</option>');
            }
        },
        error:function(e){
            console.log(e);
        }
    })

    $('#slc-empresa-factura').change(function(){
        var parametros = "codigo-empresa=" + $('#slc-empresa-factura').val();

        if($('#slc-empresa-factura').val() == ""){
            $('#slc-sucursal-factura').empty();
        }

        $.ajax({
            url: "ajax/api.php?accion=obtener-sucursales-empresa",
            method: "GET",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                if($('#slc-sucursal-factura').empty() == false){
                }
                for(var i=0;i<respuesta.length;i++){
                    $('#slc-sucursal-factura').append('<option value="'+respuesta[i].idSucursal+'">'+respuesta[i].nombreTienda+'</option>');
                }
            },
            error:function(e){
                console.log(e);
            }
        });
    });

    $('#slc-productos-factura').change(function(){
        
        var parametros = "codigo-producto=" + $('#slc-productos-factura').val();

        if($('#slc-productos-factura').val() == ""){
            $('#producto-factura').val('');
            $('#td-precio-producto').text('');
            $('#total-producto').text('');
            $('#cantidad-producto-factura').val('');
        }

        $.ajax({
            url: "ajax/api.php?accion=informacion-producto-factura",
            method: "GET",
            data: parametros,
            dataType: "JSON",
            success:function(respuesta){
                for(var i=0;i<respuesta.length;i++){
                    $('#producto-factura').val(''+respuesta[i].nombre+'');
                    $('#td-precio-producto').text(''+respuesta[i].precioVenta+'');
                    $('#cantidad-producto-factura').keyup(function(){
                        Total = $('#cantidad-producto-factura').val() * $('#td-precio-producto').text();
                        $('#total-producto').text(Total.toFixed(2));
                    });
                    
                }
            },
            error:function(e){
                console.log(e);
            }
        });



    });

    
    
    /**$('#btn-registrar-factura').click(function(){
        var parametros = "Empresa=" + $('#slc-empresa').val() + "&" + "Sucursal=" + $('#slc-sucursal-factura').val() + "&" + "Fecha=" + $('#txt-fecha').val();
        
        if($('#slc-empresa').val() == "" || $('#slc-sucursal-factura').val() == "" || $('#txt-fecha').val() == ""){
            alert('Por favor llenar toda la informacion antes de enviar el formulario');
        }
        else{
            alert('Todos los campos se han llenado');
        }
    
    });*/

    
    $.ajax({
        url: "ajax/api.php?accion=obtener-lista-productos",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for(var i=0; i<respuesta.length;i++){
                $('#slc-producto-a-eliminar').append(
                    '<option value="'+respuesta[i].idProductos+'">'+respuesta[i].nombre+'('+respuesta[i].nombreEmpresa+')</option>'
                );
            }    
            
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
            for(var i=0; i<respuesta.length;i++){
                $('#slc-producto-a-actualizar').append(
                    '<option value="'+respuesta[i].idProductos+'">'+respuesta[i].nombre+'('+respuesta[i].nombreEmpresa+')</option>'
                );
            }    
            
        },
        error:function(e){
            console.log(e);
        }
    });
    
    $('#slc-producto-a-eliminar').change(function(){
        var parametros = "idProducto=" + $('#slc-producto-a-eliminar').val();
        
        if($('#slc-producto-a-eliminar').val() == ""){
            $('#txt-cantidad-a-eliminar').val("");
        }

        $.ajax({
            url:"ajax/api.php?accion=informacion-producto-inventario",
            method: "GET",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                console.log(respuesta);
                for(var i=0; i<respuesta.length;i++){
                    $('#txt-cantidad-actual').val(respuesta[i].cantidadBandejas);
                }
            },
            error:function(e){
                console.log(e);
            }
        });
    });

    $('#slc-producto-a-actualizar').change(function(){
        var parametros = "idProducto=" + $('#slc-producto-a-actualizar').val();
        
        if($('#slc-producto-a-actualizar').val() == ""){
            $('#txt-cantidad-actual-actualizar').val("");
        }

        $.ajax({
            url:"ajax/api.php?accion=informacion-producto-inventario",
            method: "GET",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                console.log(respuesta);
                for(var i=0; i<respuesta.length;i++){
                    $('#txt-cantidad-actual-actualizar').val(respuesta[i].cantidadBandejas);
                }
            },
            error:function(e){
                console.log(e);
            }
        });
    });

    $('#btn-eliminar-producto-inventario').click(function(){
        var parametrosActualizar = "idProductoActualizar=" + $('#slc-producto-a-eliminar').val() + "&&" + "cantidadNueva=" + ($('#txt-cantidad-actual').val() - $('#txt-cantidad-a-eliminar').val());

        var parametrosEliminar = "cantidadEliminar=" + $('#txt-cantidad-a-eliminar').val() + "&&" + "idProductoDefectuoso=" + $('#slc-producto-a-eliminar').val();
        
        console.log(parametrosActualizar);
        console.log(parametrosEliminar);

        $.ajax({
            url:"ajax/api.php?accion=añadir-producto-defectuoso",
            method:"POST",
            data: parametrosEliminar,
            dataType: "json",
            success:function(respuesta){
                console.log('Se añadio el producto a la tabla productoDefectuoso');
            },
            error: function(e){
                console.log(e);
            }
        });

        $.ajax({
            url:'ajax/api.php?accion=disminuir-cantidad-bandejas',
            method: "POST",
            data: parametrosActualizar,
            dataType: "json",
            success:function(respuesta){
                alert('Producto eliminado exitosamente');
                location.reload();
            },
            error:function(e){
                console.log(e);
            }
        })

    });

    $('#btn-aumentar-cantidad-producto').click(function(){
        var suma1 = $('#txt-cantidad-actual-actualizar').val();
        var suma2 =$('#txt-cantidad-a-aumentar').val();
        suma1 = parseInt(suma1);
        suma2 = parseInt(suma2);
        resultado =suma1 + suma2;
        
        var parametrosAumentar = "idProductoAumentar=" + $('#slc-producto-a-actualizar').val() + "&&" + "cantidadAumentar=" + resultado;
        
        console.log(parametrosAumentar);
        
        
        $.ajax({
            url:'ajax/api.php?accion=aumentar-cantidad-bandejas',
            method: "POST",
            data: parametrosAumentar,
            dataType: "json",
            success:function(respuesta){
                alert('Producto aumentado exitosamente');
                location.reload();
            },
            error:function(e){
                console.log(e);
            }
        });
    });

    $.ajax({
        url:"ajax/api.php?accion=obtener-lista-producto-defectuoso",
        method:"GET",
        dataType:"json",
        success:function(respuesta){
            for(var i=0;i<respuesta.length;i++){
                $('#body-productos-dañados').append(
                    '<tr>'+
                    '<td class="text-center"><span>'+respuesta[i].Productos_idProductos+'</span></td>'+
                    '<td class="text-center"><span id="nombreProducto">'+respuesta[i].nombre+'</span></td>'+
                    '<td class="text-center"><span id="nombreProducto">'+respuesta[i].nombreEmpresa+'</span></td>'+
                    '<td class="text-center"><span id="cantidadBandejas">'+respuesta[i].cantidad+'</span></td>'+
                    '<td class="text-center"><span id="cantidadBandejas">'+respuesta[i].fechaRegistrado+'</span></td>'+
                    '</tr>'
                );
            }
        
        },
        error:function(e){
            console.log(e);
        }
    });

    $('#btn-agregar-producto-detalle-temp').click(function(){

        var parametros = "idProducto=" + $('#slc-productos-factura').val() + "&&" + "cantidad=" + $('#cantidad-producto-factura').val();

        $.ajax({
            url: "ajax/api.php?accion=agregar-producto-tabla-temporal",
            method: "POST",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                alert('Producto añadido exitosamente');
                var rows = $('#tbody-tabla-temp tr').length;
                if (rows > 0){
                    $('#tbody-tabla-temp').empty();
                }
                list_table();
                $('#cantidad-producto-factura').val('');
                $('#slc-productos-factura').val('');
                $('#producto-factura').val('');
                $('#td-precio-producto').text('');
                $('#total-producto').text('');
            },
            error:function(e){
                console.log(e)
            }
        });
    });

    
    function list_table(){
    $.ajax({
        url: "ajax/api.php?accion=ver-productos-tabla-temporal",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for(var i=0;i<respuesta.length;i++){
                var totalProducto = (respuesta[i].precioVenta * respuesta[i].cantidad);
            
                $('#tbody-tabla-temp').append(
                    '<tr>'+
                    '<th class="text-center">'+respuesta[i].idProducto+'</th>'+
                    '<th class="text-center">'+respuesta[i].nombre+'</th>'+
                    '<th class="text-center">'+respuesta[i].precioVenta+'</th>'+
                    '<th class="text-center">'+respuesta[i].cantidad+'</th>'+
                    '<th class="text-center">'+totalProducto.toFixed(2)+'</th>'+
                    '<th class="text-center"><button type="button" class="btn btn-danger" onClick="eliminarProductoTemp('+respuesta[i].idProducto+')">Eliminar</button></th>'+
                    '</tr>'
                );
            }
            
        }
    });
    }

     $.ajax({
        url: "ajax/api.php?accion=ver-productos-tabla-temporal",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            for(var i=0;i<respuesta.length;i++){
                var totalProducto = (respuesta[i].precioVenta * respuesta[i].cantidad);
            
                $('#tbody-tabla-temp').append(
                    '<tr>'+
                    '<th class="text-center">'+respuesta[i].idProducto+'</th>'+
                    '<th class="text-center">'+respuesta[i].nombre+'</th>'+
                    '<th class="text-center">'+respuesta[i].precioVenta+'</th>'+
                    '<th class="text-center">'+respuesta[i].cantidad+'</th>'+
                    '<th class="text-center">'+totalProducto.toFixed(2)+'</th>'+
                    '<th class="text-center"><button type="button" class="btn btn-danger" onClick="eliminarProductoTemp('+respuesta[i].idProducto+')">Eliminar</button></th>'+
                    '</tr>'
                );
            }
            
        }
    });

    $('#btn-registrar-factura').click(function(){
        
        var rows = $('#tbody-tabla-temp tr').length;
        if(rows > 0){
        
        var parametros = "Cliente=" + $('#slc-empresa-factura').val() + "&&" + "Direccion=" + $('#slc-sucursal-factura').val() + "&&" + "fechaFactura=" + $('#txt-fecha-factura').val();

        $.ajax({
            url: "ajax/api.php?accion=registrar-nueva-factura",
            method: "POST",
            data: parametros,
            dataType: 'json',
            success:function(respuesta){
                alert('Factura Registrada Exitosamente');
                location.href = "factura.php";
            },
            error:function(e){
                console.log(e);
            }
        });
    }
    else{
        alert('No hay productos por añadir a la factura');
    }

    });

    $.ajax({
        url: "ajax/api.php?accion=ver-lista-facturas",
        method: "GET",
        dataType:"json",
        success:function(respuesta){
            for (var i=0; i<respuesta.length;i++){
                $('#table-facturas').append(
                    '<tr>'+
                    '<th class="text-center" style="padding-top: 20px;">'+respuesta[i].idfacturas+'</th>'+
                    '<td class="text-center" style="padding-top: 20px;">'+respuesta[i].nombreTienda+'</td>'+
                    '<td class="text-center" style="padding-top: 20px;">'+respuesta[i].fecha_factura+'</td>'+
                    '<td><a href="Informacion-Factura.php?Factura='+respuesta[i].idfacturas+'">Ver Factura</a></td>'+
                '</tr>'
                );


            }
            
        },
        error:function(e){
            console.log(e);
        }
    });

    $('#btn-editar-usuario').click(function(){
        var parametros = "Personas=" + $('#slc-nombre').val() + "&" + "estado=" + $('#slc-estado').val();

        if($('#slc-nombre').val() == ""){
            alert('No ha seleccionado a un usuario para editar su estado');
        }
        else{

        $.ajax({
            url: "ajax/api.php?accion=editar-usuario",
            method: "POST",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                alert("Usuario actualizado");
                location.reload();
            },
            error:function(e){
            console.log(e);
            }
        });
        }

    });

    $.ajax({
        url:"ajax/api.php?accion=obtener-lista-personas",
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            console.log(respuesta);
            for (var i=0;i<respuesta.length;i++){
                $('#slc-nombre').append('<option value="'+respuesta[i].idPersonas+'">'+respuesta[i].nombre+' '+respuesta[i].apellido+'</option>');
            }
        },
        error:function(e){
            console.log(e);
        }
    });



});
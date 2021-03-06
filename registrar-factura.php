<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Factura</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/inventarioproductoelaborado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
<h1 style="color: white;">Facturas</h1>



  <div class="inf card pt-0 pl-0 pr-0 mb-4" style="font-size: 15px;">
                
      <div class="modal-body">
        <form class="form">
          <div class="form-group">
            <label>Cliente:</label>
            <select id="slc-empresa-factura" class="form-control">
            <option value="">...</option>
            </select>
          </div>
          <div class="form-group">
            <label>Dirección:</label>
            <select name="" id="slc-sucursal-factura" class="form-control">
            <option value=""></option>
            </select>
          </div>
          <div class="form-group">
            <label>Fecha de Emisión:</label>
            <input type="date" class="form-control" id="txt-fecha-factura" placeholder="Direccion">
          </div>
          <div class="card-content">
          <table class="table table-bordered table-sm mt-3">
          <thead>
          <tr class="text-center">
          <th>Código</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Accion</th>
          </tr>
          <tr class="text-center">
          <td>
          <select id="slc-productos-factura" class="form-control form-control-sm">
          <option value="">...</option>
          </select>
          </td>
          <td ><input type="text" class="form-control form-control-sm" id="producto-factura" disabled></td>
          <td id="td-precio-producto"></td>
          <td ><input type="number" class="form-control form-control-sm" id="cantidad-producto-factura"></td>
          <td id="total-producto"></td>
          <td ><button type="button" id="btn-agregar-producto-detalle-temp" class="btn btn-link">Agregar</button></td>
          </tr>
          </thead>
          </table id="informacion-productos-factura">
          </div>
          <div>
          <table class="table table-striped mt-3">
          <thead>
          <tr>
          <th class="text-center">Código del Producto</th>
          <th class="text-center">Descripción</th>
          <th class="text-center">Precio Unitario</th>
          <th class="text-center">Cantidad</th>
          <th class="text-center">Precio Total</th>
          </tr>
          </thead>
          <tbody id="tbody-tabla-temp">
            
          </tbody>
          </table>
          </div>
            <button type="button" class="btn btn-primary mt-2" id="btn-registrar-factura">Registrar Factura</button>
          </div>
          </div>
        </form>
      </div>

</div>



    <script src='js/jquery-3.4.1.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    
    <script src="js/menu.js"></script>
    <script src="js/controlador.js">
    
    </script>
    <script >
      function eliminarProductoTemp(idProd){

        var parametros = "Producto=" + idProd;

        $.ajax({
          url: "ajax/api.php?accion=eliminar-producto-fact-temp",
          method: "POST",
          data: parametros,
          dataType: "json",
          success:function(respuesta){
            },
          error:function(e){
            console.log(e);
          }
        });

        alert('Producto Eliminado');

        var rows = $('#tbody-tabla-temp tr').length;
        
        if (rows > 0){
          $('#tbody-tabla-temp').empty();
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
        

      }
    </script>
</body>
</html>
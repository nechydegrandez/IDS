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
            <label>Direccion:</label>
            <select name="" id="slc-sucursal-factura" class="form-control">
            <option value=""></option>
            </select>
          </div>
          <div class="form-group">
            <label>Fecha de Emision:</label>
            <input type="date" class="form-control" id="txt-fecha" placeholder="Direccion">
          </div>
          <div class="card-content">
          <table class="table table-bordered table-sm mt-3">
          <thead>
          <tr class="text-center">
          <th>Codigo</th>
          <th>Descripcion</th>
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
          <td ><a href="#">Agregar</a></td>
          </tr>
          </thead>
          </table>
          </div>
          <div>
          <table class="table table-striped mt-3">
          <thead>
          <tr>
          <th>Codigo del Producto</th>
          <th>Descripcion</th>
          <th>Precio Unitario</th>
          <th>Cantidad</th>
          <th>Precio Total</th>
          <th>Accion  </th>
          </tr>
          </thead>
          </table>
          </div>
            <button type="button" class="btn btn-primary mt-2" id="btn-registrar-factura">Registrar e Imprimir Factura</button>
          </div>
          </div>
        </form>
      </div>

</div>



    <script src='js/jquery-3.4.1.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <!--<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>-->
    
    <script src="js/menu.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
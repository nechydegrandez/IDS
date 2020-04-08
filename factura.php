<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas</title>
    <link href="css/facturas.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
<h1 style="color: white;">Facturas</h1>


<form  class="inf card" action="">
<div class="row">
  <div class="col-1 pr-0">
    <label for="">Empresa:</label>
  </div>
  <div class="offset-1 col-3 pl-0 pr-4 ml-5">
    <select id="slc-empresa" class="form-control">

    </select>
  </div>
</div>
</form>

<div class="inf card pt-0 pl-0 pr-0" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Codigo del Pedido</th>
      <th class="text-center">Sucursal</th>
      <th class="text-center">Fecha</th>
      <th class="text-center">Total Factura</th>
      <th class="text-center">       </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-center">1</th>
      <td class="text-center">La Colonia #12</td>
      <td class="text-center">27/02/202</td>
      <td class="text-center">200.00</td>
      <td class="text-center"><a href="crear-pdf.php" class="btn btn-link">Imprimir</a></td> <!-- Este boton descargara la informacion del pedido, para despues imprimirlo -->
    </tr>
  </tbody>
  </table>
  <nav aria-label="..." class="ml-2">
  <ul class="pagination pagination-sm">
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        1
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>
  </div>


</div>




    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    
    <script src="js/menu.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
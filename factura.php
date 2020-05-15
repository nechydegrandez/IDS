<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas</title>
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




<div class="inf card pt-0 pl-0 pr-0" style="font-size: 15px;">
  <form>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">No. Factura</th>
      <th class="text-center">Sucursal</th>
      <th class="text-center">Fecha</th>
      <th></th>
    </tr>
  </thead>
  <tbody id="table-facturas">
    
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
  </form>


</div>



    <script src='js/jquery-3.4.1.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <!--<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>-->
    
    <script src="js/menu.js"></script>
    <script src="js/controlador.js"></script>
    <script>
      function verIDFactura(id){
        alert(id);
      }
    </script>
</body>
</html>
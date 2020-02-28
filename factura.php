<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones</title>
    <link href="css/facturas.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
<h1 >Facturas</h1>


<form  class="inf" action="">
  <div style="font-size: 20px">Empresa      
    <select name="empresa" id="empresa">
    Sucursal: <select name="empresa" id="empresa"></select>
  </div>
</form>

<div class="inf align-items-center" style="font-size: 15px;">
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
      <td class="text-center"><a href="#" download="">Imprimir</a></td> <!-- Este boton descargara la informacion del pedido, para despues imprimirlo -->
    </tr>
  </tbody>
  </table>
  <nav aria-label="...">
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
  <button class="btn btn-primary btn-sm">Registrar Nueva Devolución</button>


</div>




      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
</body>
</html>
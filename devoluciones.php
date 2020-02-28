<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones</title>
    <link href="css/devoluciones.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
<h1 class="">Devoluciones</h1>


<form  class="inf" action="">
  <div>Empresa 
    <select name="empresa" id="empresa">
    Sucursal: <select name="empresa" id="empresa"></select>
  </div>
</form>

<div class="inf">
  <div>
  <table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">Codigo Devolucion</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Fecha</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Total Devolucion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>La Colonia #12</td>
      <td>27/02/202</td>
      <td>Espumilla Pequeña</td>
      <td>10</td>
      <td>200.00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  </table>
  <nav aria-label="...">
  <ul class="pagination pagination-lg">
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
  <button class="btn">Registrar Nueva Devolución</button>


</div>




      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
</body>
</html>
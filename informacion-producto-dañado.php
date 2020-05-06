<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Dañados</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/inventarioproductoelaborado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    
    <?php
    include ("menu-admin.html") ;
      ?> 
    
    
    <h1 style="color:white; padding-left:400px;">Informacion Productos Dañados</h1>
      
    <div class="inf align-items-center pt-0 pl-0 pr-0 border rounded" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Codigo</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Empresa</th>
      <th class="text-center">Cantidad de Produto Eliminado</th>
      <th class="text-center">Fecha Registrado</th>
    </tr>
  </thead>
  <tbody id="body-productos-dañados">
    
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

  
    




<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="js/bootstrap.min.js"></script>    
<script src="js/menu.js"></script>
<script src="js/controlador.js"></script>
</body>
</html>
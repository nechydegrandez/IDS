<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link href="css/;Menu-Empleados.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  </div><!--fin menu izquierda-->
  <div style="border-left: 2px solid rgb(58, 48, 48);"></div>
  <div> <!--div de contenedor derecho-->
  <div Style="margin-left: 250px; margin-top: 120px;">
    <h1>Registrar Producto Vendido</h1>
    <div Style="margin-top: 100px; margin-left: 55px;"> <!--contenedor de items debajo del titulo-->
    <div class="row">
      <p>Nombre Producto</p>
      <div class="dropdown" style="margin-left: 55px;">
        <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Producto
        </a>
    <div class="dropdown-menu dropdown-menu-right btn-lista drop-margen" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item btn-bts" id="letra" href="#">Papas</a>
      <a class="dropdown-item btn-bts" id="letra" href="#">Manzanas</a>
    </div>
    </div>
  </div><!--fin de contenedor de producto-->
  <div class="row" style="margin-top: 15px;">
    <p>Cantidad</p>
    <textarea name="body" id="edit-body" cols="12" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 135px;">
    </textarea>
  </div>
  <div class="row" style="margin-top: 15px;">
   <p>fecha</p>
   <div class="dropdown" style="margin-left: 55px;">
    <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      dia
    </a>
</div>
<div class="dropdown" style="margin-left: 5px;">
  <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    mes
  </a>
</div>
<div class="dropdown" style="margin-left: 5px;">
  <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    año
  </a>
</div>
  </div>
  <div class="row" style="margin-top: 15px;">
    <button type="button" class="btn border">
    Limpiar campos  
    </button>
    <button type="button" class="btn border" style="margin-left: 55px;">
      Registrar  
      </button>
  </div>

  </div><!--fin de contenedor de items de debajo del titulo-->
  </div><!--fin div contenedor derecho-->
</div>

</body>
</html>

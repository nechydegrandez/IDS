<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
    <link href="css/registrar-productos-catalogo.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 


    <h1>Registrar Nuevo Producto</h1>

    <div class="inf card align-items-center pr-5" style="font-size: 15px;"> <!--contenedor de items debajo del titulo-->
    <div class="row">
      <p>Nombre del Producto</p>
      <textarea name="body" id="edit-body" cols="50" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 80px;">
    </textarea>
  </div><!--fin de contenedor de producto-->
  <div class="row" style="margin-top: 15px;">
    <p>Codigo</p>
    <textarea name="body" id="edit-body" cols="50" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 182px;">
    </textarea>
  </div>
  <div class="row" style="margin-top: 15px;">
    <p>Precio de venta</p>
    <textarea name="body" id="edit-body" cols="50" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 125px;">
    </textarea>
  </div>
  <div class="row" style="margin-top: 15px;">
   <p>Categoria</p>
   <div class="dropdown" style="margin-left: 55px;">
    <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      -----------
    </a>
</div>

  </div>
  <div class="row" style="margin-top: 15px;">
    <button type="button" class="btn btn-warning border">
    Limpiar campos  
    </button>
    <button type="button" class="btn btn-primary border" style="margin-left: 55px;">
      Agregar Productos 
      </button>
  </div>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
</body>
</html>

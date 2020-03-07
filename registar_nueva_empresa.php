#!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
        <div Style="margin-left: 250px; margin-top: 120px;">
    <h1>Agregar Nueva Empresa</h1>
    <div Style="margin-top: 75px; margin-left: 10px;"> <!--contenedor de items debajo del titulo-->
    <div class="row">
        <p>Nombre de Empresa</p>
        <textarea name="body" id="edit-body" cols="40" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 75px;">
        </textarea>
  </div><!--fin de contenedor de producto-->
  <div class="row" style="margin-top: 15px;">
    <p>RTN Empresa</p>
    <textarea name="body" id="edit-body" cols="40" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 125px;">
    </textarea>
  </div>
  <div style="margin-top: 15px;">
    <strong>Informacion Oficina Principal</strong>
</div>
  <div class="row" style="margin-top: 15px;">
   <p>Departamento</p>
   <div class="dropdown" style="margin-left: 10px;">
    <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Morazan
    </a>
</div>
<p style="margin-left: 15px;">Municipio</p>
<div class="dropdown" style="margin-left: 10px;">
  <a class="btn btn-presionar dropdown-toggle btn-h btn-grupos" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    TGU
  </a>
</div>
<p style="margin-left: 15px;">Telefono</p>
<textarea name="body" id="edit-body" cols="12" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 15px;">
</textarea>
  </div>
  <div class="row" style="margin-top: 15px;">
    <p>Direccion</p>
    <textarea name="body" id="edit-body" cols="65" rows="0.5" class="upd-01" aria-hidden="true" style="margin-left: 15px;">
    </textarea>
  </div>
  <button type="button" class="btn border" style="margin-left: 170px;margin-top: 15px;">Registrar Empresa</button>

  </div><!--fin de contenedor de items de debajo del titulo-->
  </div><!--fin div contenedor derecho-->
</div>
      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
</body>
</html>
  

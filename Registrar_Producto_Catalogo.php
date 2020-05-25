<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/registrar-productos-catalogo.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 


    <h1 style="color: white;">Registrar Nuevo Producto</h1>

    <div class="inf card align-items-center pr-0 pl-0 pt-0" style="font-size: 15px;">
<table class="table table-striped form">
    <tr>
        <td colspan="2" class="text-right"><label class="mt-1">Nombre del Producto:</label></td>
        <td colspan="2"><input type="text" id="txt-nombre-producto" class="form-control"></td>
    </tr><tr>
        <td colspan="2" class="text-right"><label class="mt-1">Código:</label></td>
        <td colspan="2"><input type="number"  min="1" pattern="^[0-9]+"  id="txt-codigo-producto" class="form-control"></td>
    </tr>
    <tr>
        <td colspan="2" class="text-right"><label class="mt-1">Precio:</label></td>
        <td colspan="2"><input type="number"  min="1" pattern="^[0-9]+"  id="txt-precio-producto" class="form-control"></td>
    </tr>
    <tr>
        <td  colspan="2" class="text-right"><label class="mt-1">Empresa</label></td>
        <td colspan="2"><select name="" id="slc-empresa" class="form-control">
        <option value="">...</option>
        </select></td>
    </tr>
    <tr>
    </tr>
</table>
<div >
    <button class="btn btn-primary" id="btn-registrar-producto">Registrar Producto</button>
</div>
</div>

  <script src='js/jquery-3.4.1.min.js'></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/controlador.js"></script>  
  <script src="js/menu.js"></script>
</body>
</html>

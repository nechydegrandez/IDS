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
    include ("menu-admin.html") ;
      ?> 
    
  
<h1 >Registrar Empresa</h1>

<div class="inf card align-items-center pr-5" style="font-size: 15px;">
<table class="table table-striped form">
    <tr>
        <td><label class="mt-1">Nombre Empresa</label></td>
        <td><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td><label class="mt-1">RTN</label></td>
        <td><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td><label class="mt-1">Direccion Oficina Principal</label></td>
        <td><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td><label class="mt-1">Telefono Oficina Principal</label></td>
        <td><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td><button class="btn btn-primary" type="button">Registrar Empresa</button></td>
        <td><button type="reset" class="btn btn-secondary">Reiniciar</button></td>
    </tr>
</table>

</div>





      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
</body>
</html>
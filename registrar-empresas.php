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
    
  
<h1 style="color: white;">Registrar Empresa</h1>

<div class="inf card align-items-center pr-0 pl-0 pt-0" style="font-size: 15px;">
<table class="table table-striped form">
    <tr>
        <td colspan="1" class="text-right"><label class="mt-1">Nombre Empresa</label></td>
        <td colspan="3"><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td colspan="1" class="text-right"><label class="mt-1">RTN</label></td>
        <td colspan="3"><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td class="text-right"><label class="mt-1">Departamento</label></td>
        <td >
            <select id="slc-departamento" class="form-control">
                <option value="">Francisco Morazan</option>
            </select>
        </td>
        <td class="text-right"><label class="mt-1">Municipio</label></td>
        <td >
            <select id="slc-departamento" class="form-control">
                <option value="">Tegucigalpa</option>
            </select>
        </td>
    </tr>
    <tr>
        <td  colspan="1" class="text-right"><label class="mt-1">Direccion Oficina Principal</label></td>
        <td colspan="3"><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td colspan="1" class="text-right"><label class="mt-1">Telefono Oficina Principal</label></td>
        <td colspan="3"><input type="text" id="txt-nombre-empresa" class="form-control"></td>
    </tr>
    <tr>
    </tr>
</table>
<div >
    <button class="btn btn-primary">Registrar Empresa</button> <button class="btn btn-secondary ml-3" type="reset">Limpiar</button>
</div>
</div>







      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php

session_start();
    if (!isset($_SESSION["usr"]) || !isset($_SESSION["psw"])){
        header("Location: login.php");
    }

    include("class/conexion.php");
    $conexion = new Conexion();
     $sql = sprintf( 
        "SELECT * FROM usuarios WHERE usuario = '%s' and contrasenia = '%s' and idtipousuario = 1",
        $_SESSION["usr"],
        $_SESSION["psw"]);
    //echo $sql;
    //exit;
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)<=0){


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empresas</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
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
        <td colspan="3"><input type="number" id="txt-RTN-empresa" class="form-control"></td>
    </tr>
    <tr>
        <td  colspan="1" class="text-right"><label class="mt-1">Direccion Oficina Principal</label></td>
        <td colspan="3"><input type="text" id="txt-direccion-principal-empresa" class="form-control"></td>
    </tr>
    <tr>
    </tr>
</table>
<div >
    <button class="btn btn-primary" id="btn-registrar-empresa">Registrar Empresa</button>
</div>
</div>







      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
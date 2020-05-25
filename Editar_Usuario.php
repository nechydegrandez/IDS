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
    <title>Estado del Empleado</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/inventarioproductoelaborado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->

<?php
include ("menu-admin.html") ;
?> 
    


    <h1 style="color:white;">Editar Usuario</h1> 
 
  <div class="inf align-items-center pr-1" style="font-size: 22px;">
 
    <div class="row">
      <div class="col-6 justify-content-center mt-2">
       <img src="img/editar.jpg"   class="img-fluid img-thumbnail">
      </div>
  
      <div class="col-1 offset-2 mt-2">
      <br>
      <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Editar Usuario</button>
      
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actualizar Información del Perfil</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Nombre:</label>
                  <td><select id="slc-nombre" class="form-control">
                  <option value="">...</option>
                  </select></td>
                </div>
                <div class="form-group">
                  <label>Estado:</label>
                  <select name="" id="slc-estado" class="form-control">
                    <option value="a">Activo</option>
                    <option value="i">Inactivo</option>
                  </select>
                </div>
               
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" id="btn-editar-usuario" class="btn btn-primary">Actualizar Información</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <script src='js/jquery-3.4.1.min.js'></script>
  <script src="js/menu.js"></script>
  <script src="js/fontawesome.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/controlador.js"></script>
</body>
</html>
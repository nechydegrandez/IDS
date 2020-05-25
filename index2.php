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

      if($_SESSION["tipUsr"] = 1){
        header("Location: index2.php");
      }
      else{
        header("Location: index.php");
      }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicio - Administador</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/agregarpedido.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu-admin.html") ;
      ?> 

<h1 style="color: white;">Bienvenido(a) <?php echo $_SESSION['usr']?></h1>

<div class="inf card pr-5 mt-5 pt-1" style="font-size: 15px;">
  <div class="row">
    <div class="col-5 justify-content-center mt-3 pt-3">
     <img src="img/logo.png" class="img-fluid img-thumbnail">
    </div>
    <div class="col-7 pl-0 pr-0 pb-0">
     <table class="table mt-5">
      <tbody>
        <tr>
          <td class="text-right pt-3">Nombre Usuario: </td>
          <td> <input type="text" class="form-control" value="<?php echo $_SESSION['usr']?>" ></td>
        </tr>
        <tr>
         
  
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
    
 




<script src='js/jquery-3.4.1.min.js'></script>
    
    <script src="js/menu.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
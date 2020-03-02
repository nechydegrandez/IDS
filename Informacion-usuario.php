<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="css/menu-empleado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  <h1>Informacion del Perfil</h1>

  <div class="inf align-items-center" style="font-size: 15px;">
    <div class="row no-gutters offset-3">
      <div class="col-7 justify-content-center">
       <img src="img/user.jpg" class="img-fluid">
       <h4 class="text-center mt-3">Nombre_Usuario</h4>
       <h4 class="text-center ">Cargo_Usuario</h4>
      </div>
      <div class="card"></div>
    </div>
  </div>




  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="js/menu.js"></script>
</body>
</html>
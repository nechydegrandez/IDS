<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/menu-empleado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  <h1 style="color: white;">Bienvenido</h1>

  <div class="inf card pr-5" style="font-size: 15px;">
    <div class="row">
      <div class="col-5 justify-content-center mt-5 pt-3">
       <img src="img/logo.png" class="img-fluid img-thumbnail">
      </div>
      <div class="col-7 card pl-0 pr-0 pb-0">
       <table class="table table-striped">
        <tbody>
          <tr>
            <td class="text-right pt-3">Nombre Usuario: </td>
            <td> <input type="text" class="form-control" value="<?php echo $_SESSION['user']?>" ></td>
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
  <script src="js/fontawesome.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
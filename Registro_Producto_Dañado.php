


<?php

  $nombreProducto = $_POST['#nombreProducto'];
  $fechaElaboracion = $_POST['#fechaElaboracion'];
  $fechaVencimiento = $_POST['#fechaVencimiento'];
  $cantidadBandejas =$_POST['#cantidadBandejas'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrar_Producto_Dañado</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/menu-empleado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->

<?php
include ("menu.html") ;
?> 
    
  <section class="form-register">
      <h5>Registrar el Producto Dañado</h5>
      <tr>
        <h4>Producto</h4>
        <input class="controls" type="text" name="Nombres" id="" value="<?php echo $nombreProducto?>">
        <tr>
      <tr>
        <h4>Fecha de Elaboración </h4>
      <input type="date" class="form-control" id="txt-fecha" placeholder="Fecha de registro">
     
      <tr>
      </tr>
      <tr>
        <h4>Fecha de Vencimiento</h4>
      <input type="date" class="form-control" id="txt-fecha" placeholder="Fecha de registro">
     <tr>
       
        
      </tr>
      
          <h4>Cantidad</h4>
        </tr>
      <input type="number" class="form-control" id="txt-cantidad-eliminar" placeholder="Cantidad">
      <br>
      <br>
      <input class="btn btn-danger" type="submit" value="Eliminar Producto">
  </section>


  <script src='js/jquery-3.4.1.min.js'></script>
  <script src="js/bootstrap.min.js"></script>    
  <script src="js/menu.js"></script>
  <script src="js/controlador.js"></script>
  </body>
  </html>




<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicio</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 

<div id="inf">
 <!--
<p> ROL DE LA EMPRESA</p>
<p>Es una microempresa familiar, que se encarga de elaborar un producto 100% nacional, con el fin de endulzar a las familias de Honduras.
</p> 
<br>
<br>
<p>
MISION Y VISION</p>
<br>
Visión <br>
Ser una marca líder de producción y distribución de unos de los dulces artesanales más conocidos en el país. <br>
    <br>
    Misión <br>
Fabricar artesanalmente, bajo estrictas medidas de higiene, uno de los dulces más conocidos en el país, siendo las cadenas de distribución y ventas los supermercados más grandes de Honduras.






<img src="img/p1.jpg" class="foto">

<img src="img/p2.jpg" class="foto">

</div>
-->

Bienvenido  <?php echo $_SESSION['user']?>
      <div>
      
      <img src="" alt="">
      </div>
    
 




<script src='js/jquery-3.4.1.min.js'></script>
    
    <script src="js/menu.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
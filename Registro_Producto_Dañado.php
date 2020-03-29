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
        <h4>Còdigo del Producto</h4>
        <input class="controls" type="text" name="Nombres" id="" placeholder="ingrese còdigo Producto">
        <tr>
      <tr>
        <h4>Fecha de Elaboraciòn </h4>
      <input type="date" class="form-control" id="txt-fecha" placeholder="Fecha de registro">
     
      <tr>
      </tr>
      <tr>
        <h4>Fecha de caducidad</h4>
      <input type="date" class="form-control" id="txt-fecha" placeholder="Fecha de registro">
     <tr>
       
        
      </tr>
      
          <h4>Fecha de registro</h4>
        </tr>
      <input type="date" class="form-control" id="txt-fecha" placeholder="Fecha de registro">
      <br>
      <br>
      <input class="btn btn-primary" type="submit" value="Registrar el producto dañado">
</section>
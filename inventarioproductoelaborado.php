<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario producto elaborado</title>

    <link href="css/inventarioproductoelaborado.css" rel="stylesheet">

</head>

<body>
<?php
    include ("menu.html") ;
      ?> 
      <h1>Agregar Producto Elaborado al inventario</h1>
<form action="">
<pre>
nombre del producto <select name="nombre producto" id="nombre producto"></select>
codigo <select name="nombre producto" id="nombre producto"></select>
cantidad <input type="text" name="cant" id="cant">
fecha de Elaboracion <select name="dia" id="dia"></select> <select name="dia" id="dia"></select> <select name="dia" id="dia"></select>
fecha de Vencimiento <select name="dia" id="dia"></select> <select name="dia" id="dia"></select> <select name="dia" id="dia"></select>
</pre>
<input type="button" value="Limpiar campos">
<input type="button" value="Registrar producto">

</form>




<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    

<script src="js/menu.js"></script>
</body>
</html>
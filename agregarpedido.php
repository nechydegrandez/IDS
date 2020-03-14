<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/agregarpedido.css" rel="stylesheet">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
<h1>Agregar Nuevo Pedido</h1>


<form  class="inf" action="">
<pre>Empresa: <select name="empresa" id="empresa">
                           Sucursal: <select name="empresa" id="empresa"></select></pre>

</form>
<div class="inf">
<pre>Fecha registro del pedido <select name="empresa" id="empresa"></select> <select name="empresa" id="empresa"></select> <select name="empresa" id="empresa"></select>  </pre>

<pre>Fecha limite de  entrega pedido <select name="empresa" id="empresa"></select> <select name="empresa" id="empresa"></select> <select name="empresa" id="empresa"></select>  </pre>

</div>

<div class="inf">
 <pre>  producto 1 <select name="producto 1" id="producto"></select>         bandejas pproducto 1 <input type="text" name="bandejas">
 </pre>
 <input type="button" value="Agregar otro pedido">
</div>
<br><br>
<input type="button" value="Ingresar otro pedido">



      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
</body>
</html>
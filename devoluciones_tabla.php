<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link href="css/devoluciones.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 

  <div style="border-left: 2px solid rgb(58, 48, 48);"></div>
  <div> <!--div de contenedor derecho-->
  <div Style="margin-left: 250px; margin-top: 120px;">
    <h1>Catalogo</h1>
    <div Style="margin-top: 100px; margin-left: 15px;"> <!--contenedor de items debajo del titulo-->
    <div class="row">
      <p style="margin-left: 5px;">N Pedido</p>
      <p style="margin-left: 29px;">Empresa</p>
      <p style="margin-left: 29px;">Producto</p>
      <p style="margin-left: 29px;">Cantidad</p>
      <p style="margin-left: 29px;">Motivo</p>
      <p style="margin-left: 29px;">Fecha Registro</p>
      <p style="margin-left: 29px;">Estado</p>
  </div><!--fin de contenedor de producto-->

  <div class="row" style="margin-top: 5px;">
    <div class="btn border" style="border-color: black;"><p>----------</p></div>
    <div class="btn border" style="border-color: black;margin-left: 2px;"><p>----------</p></div>
    <div class="btn border" style="border-color: black;margin-left: 2px;"><p>----------</p></div>
    <div class="btn border" style="border-color: black;margin-left: 2px;"><p>----------</p></div>
    <div class="btn border" style="border-color: black;margin-left: 2px;"><p>----------</p></div>
    <div class="btn border" style="border-color: black;margin-left: 2px;"><p>----------</p></div>
    <div class="btn border" style="border-color: black;margin-left: 2px;"><p>----------</p></div>
  </div>
  
  <button type="button" class="btn border" style="margin-top: 55px;margin-left: -15px;">Cambiar Estado</button>

  </div><!--fin de contenedor de items de debajo del titulo-->
  </div><!--fin div contenedor derecho-->
</div>

</body>
</html>

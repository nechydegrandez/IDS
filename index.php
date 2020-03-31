<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicio</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/agregarpedido.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
<h1 style="margin-left: 15px; color: white;">Pagina Principal</h1>


<form  class="inf card" action="" style="margin-top:50px;">
<div class="row">
  <div class="col-1 pr-0">
    <label for="">Empresa:</label>
  </div>
  <div class="offset-1 col-3 pl-0 pr-4 ml-5">
    <select id="slc-empresa" class="form-control">

    </select>
  </div>
</div>

</form>
<div class="inf card">
<div class="row">
  <div class="col-4">
    <label style="font-size:17px;"><strong>Fecha de Registro del Pedido:</strong></label>
  </div>
  <div class="col-1 ml-0 pl-1 pr-1">
    <select id="slc-dia" class="form-control">
      <option value="">1</option>
    </select>
  </div>
  <div class="col-1 pr-0 pl-0">
    <select id="slc-mes" class="form-control">
      <option value="">01</option>
      <option value="">02</option>
      <option value="">03</option>
      <option value="">04</option>
      <option value="">05</option>
      <option value="">06</option>
      <option value="">07</option>
      <option value="">08</option>
      <option value="">09</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
    </select>
  </div>
  <div class="col-2 pl-1 pr-4">
    <select id="slc-año" class="form-control">
      <option value="">2020</option>
    </select>
  </div>
</div>



</div>




      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
</body>
</html>
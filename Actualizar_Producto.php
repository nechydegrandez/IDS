<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
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
  <div>
    <h1>Actualizar Producto</h1>
  </div>  
  

  <div class="inf align-items-center pr-5" style="font-size: 15px;">
    <div class="row">
      <div class="col-5 justify-content-center mt-4">
       <img src="img/actualizar.jpg" class="img-fluid img-thumbnail">
      </div>
      <div class="col-6 card ">
       <table class="table table-striped">
        <tbody>
          <tr>
            <td>Código de Producto </td>
            <td><input type="text" id="txt-código_producto" class="form-control"></td>
          </tr>
          <tr>
            <td>Fecha de Elaboración </td>
            <td><input type="text" id="txt-fecha_elaboracion" class="form-control"></td>

          </tr>
          <tr>
            <td>Fecha de Caducidad</td>
            <td><input type="text" id="txt-fecha_caducidad" class="form-control"></td>

          </tr>
        
        </tbody>
       </table>
      </div>
   

            </div>
            <div class="modal-footer">
              <button class="btn btn-primary btn-sm">Actualizar Producto</button>
              <button class="btn btn-primary btn-sm">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>




  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="js/menu.js"></script>
  <script src="js/fontawesome.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar_Usuario</title>
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
    
  <h1>Editar Usuario</h1>

  <div class="inf align-items-center pr-1" style="font-size: 22px;">
    <div class="row">
      <div class="col-6 justify-content-center mt-2">
       <img src="img/editar.jpg" class="img-fluid img-thumbnail">
      </div>
      <div class="col-7 card ">
       <table class="table table-striped">
        <tbody>
          <tr>
            <td>Nombre Usuario: </td>
          </tr>
          <tr>
            <td>Fecha de Nacimiento: </td>
          </tr>
          <tr>
            <td>Correo Electronico: </td>
          </tr>
          <tr>
            <td>Numero de Telefono: </td>
          </tr>
          <tr>
            <td>Cargo Usuario: </td>
          </tr>
        </tbody>
       </table>
      </div>
      <div class="col-1 offset-2 mt-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Editar Usuario</button>
      
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actualizar Informacion del Perfil</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" id="txt-nombre" placeholder="Nombre Usuario">
                </div>
                <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <input type="date" class="form-control" id="txt-fecha">
                </div>
                <div class="form-group">
                  <label>Correo Electronico:</label>
                  <input type="email" class="form-control" id="txt-correo" placeholder="ejemplo@hotmail.com">
                </div>
                <div class="form-group">
                  <label>Numero de Telefono:</label>
                  <input type="number" class="form-control" id="txt-telefono" placeholder="90909090">
                </div>
                <div class="form-group">
                  <label>Cargo:</label>
                  <input type="email" class="form-control" id="txt-correo" placeholder="Cargo">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick='alert("Informacion Actualizada Correctamente")'>Actualizar Información</button>
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
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
    
  <h1 style="color: white;">Información del Perfil</h1>

  <div class="inf card pr-5" style="font-size: 15px;">
    <div class="row">
      <div class="col-5 justify-content-center mt-5 pt-3">
       <img src="img/user.jpg" class="img-fluid img-thumbnail">
      </div>
      <div class="col-7 card pl-0 pr-0 pb-0">
       <table class="table table-striped">
        <tbody>
          <tr>
            <td class="text-right pt-3">Nombre Usuario: </td>
            <td><input type="text" class="form-control" value="" disabled></td>
          </tr>
          <tr>
            <td class="text-right pt-3">Fecha de Nacimiento: </td>
            <td><input type="text" class="form-control" value="" disabled></td>
          </tr>
          <tr>
            <td class="text-right pt-3">Correo Electronico: </td>
            <td><input type="text" class="form-control" value="" disabled></td>
          </tr>
          <tr>
            <td class="text-right pt-3">Número de Teléfono: </td>
            <td><input type="text" class="form-control" value="" disabled></td>
          </tr>
          <tr>
            <td class="text-right pt-3">Cargo Usuario: </td>
            <td> 
              <select id="slc-cargo" class="form-control" disabled>
                <option></option>
                <option></option>
              </select> 
            </td>
          </tr>
        </tbody>
       </table>
      </div>
      <div class="col-5 offset-4 mt-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Actualizar Informacion</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actualizar Información del Perfil</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Correo Electronico:</label>
                  <input type="email" class="form-control" id="txt-correo" placeholder="ejemplo@hotmail.com">
                </div>
                <div class="form-group">
                  <label>Número de Teléfono:</label>
                  <input type="number" class="form-control" id="txt-telefono" placeholder="90909090">
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




  <script src='js/jquery-3.4.1.min.js'></script>
  <script src="js/menu.js"></script>
  <script src="js/fontawesome.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
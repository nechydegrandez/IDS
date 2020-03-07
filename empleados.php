<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="css/facturas.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu-admin.html") ;
      ?> 
    
  
<h1 >Empleados</h1>

<div class="inf align-items-center pt-0 pl-0 pr-0" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Codigo</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Fecha Nacimiento</th>
      <th class="text-center">Edad</th>
      <th class="text-center">Correo</th>
      <th class="text-center">Cargo</th>
      <th class="text-center">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-center">1</th>
      <td class="text-center">Rafael Bautista</td>
      <td class="text-center">09/03/1998</td>
      <td class="text-center">21</td>
      <td class="text-center">rafael.bautista1@hotmail.es</td>
      <td class="text-center">Repartidor</td>
      <td class="text-center">95202808</td>
    </tr>
  </tbody>
  </table>
  <nav aria-label="..." class="ml-2">
  <ul class="pagination pagination-sm">
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        1
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>

<button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">Nuevo Empleado</button>
      
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel">Informacion Empleado</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" id="txt-nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label>Apellido:</label>
                  <input type="text" class="form-control" id="txt-nombre" placeholder="Apellid">
                </div>
                <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <input type="date" class="form-control" id="txt-fecha" placeholder="Direccion">
                </div>
                <div class="form-group">
                  <label>Edad:</label>
                  <input type="number" class="form-control" id="txt-fecha" placeholder="Edad">
                </div>
                <div class="form-group">
                  <label>Correo:</label>
                  <input type="email" class="form-control" id="txt-fecha" placeholder="Edad">
                </div>
                <div class="form-group">
                  <label>Cargo:</label>
                  <input type="number" class="form-control" id="txt-fecha" placeholder="Edad">
                </div>
                <div class="form-group">
                  <label>Telefono:</label>
                  <input type="number" class="form-control" id="txt-fecha" placeholder="Edad">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick='alert("Empleado Registrado Correctamente")'>Registrar Usuario</button>
            </div>
          </div>
        </div>
      </div>


  </div>


</div>




      <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
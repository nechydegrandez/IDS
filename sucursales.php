<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones</title>
    <link href="css/devoluciones.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu-admin.html") ;
      ?> 
    
  
<h1 >Sucursales</h1>


<form  class="inf form" action="">
  <div style="font-size: 20px" class="row">
  <label class="col-2">Empresa:</label>
  <select name="empresa" id="empresa" style="" class="form-control  col-4">
    Sucursal: <select name="empresa" id="empresa"></select>
  </div>
</form>

<div class="inf" style="font-size: 15px">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Codigo Sucursal</th>
      <th class="text-center">Nombre Sucursal</th>
      <th class="text-center">Empresa</th>
      <th class="text-center">Direccion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-center">1</th>
      <td class="text-center">La Colonia #12</td>
      <td class="text-center">La Colonia</td>
      <td class="text-center">Metromall</td>
    </tr>
  </tbody>
  </table>
  <nav aria-label="...">
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
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nueva Sucursal</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actualizar Informacion del Perfil</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Nombre Sucursal:</label>
                  <input type="text" class="form-control" id="txt-nombre" placeholder="Nombre Usuario">
                </div>
                <div class="form-group">
                  <label>Direccion:</label>
                  <input type="date" class="form-control" id="txt-fecha">
                </div>
                <div class="form-group">
                  <label>Empresa:</label>
                  <select type="email" class="form-control" id="txt-correo" placeholder="ejemplo@hotmail.com">
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick='alert("Informacion Actualizada Correctamente")'>Registrar Sucursal</button>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/devoluciones.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu-admin.html") ;
      ?> 
    
  
<h1 style="color: white;">Sucursales</h1>


<form  class="inf card" action="">
  <div style="font-size: 20px" class="row">
  <label class="col-2">Empresa:</label>
  <select name="empresa" id="slc-empresa" style="" class="form-control  col-4">
    Sucursal: <select name="empresa" id="empresa"></select>
  </div>
</form>

<div class="inf align-items-center pt-0 pl-0 pr-0 border rounded" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Nombre Sucursal</th>
      <th class="text-center">Empresa</th>
      <th class="text-center">Municipio</th>
      <th class="text-center">Telefono</th>
      <th class="text-center">Gerente</th>
    </tr>
  </thead>
  <tbody id="body-sucursales">
    
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
  </div>
  <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#agregarSucursal">Nueva Sucursal</button>
  <button type="button" class="btn btn-warning ml-2" data-toggle="modal" data-target="#editarSucursal" disabled>Editar Sucursal</button>
      
  
  <div class="modal fade" id="agregarSucursal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar Sucursal</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Nombre Sucursal:</label>
                  <input type="text" class="form-control" id="txt-nombre-sucursal" placeholder="Nombre Sucursal">
                </div>
                <div class="form-group">
                  <label>Municipio:</label>
                  <select class="form-control" id="slc-municipio-sucursal">
                  </select>
                </div>
                <div class="form-group">
                  <label>Empresa:</label>
                  <select class="form-control" id="slc-empresa-sucursal">
                  </select>
                </div>
                <div class="form-group">
                  <label>Telefono:</label>
                  <input type="text" class="form-control" id="txt-telefono-tienda" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <label>Gerente:</label>
                  <input type="text" class="form-control" id="txt-nombre-gerente" placeholder="Gerente">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" id="btn-agregar-sucursal">Registrar Sucursal</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="editarSucursal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Sucursal</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Nombre Sucursal:</label>
                  <select class="form-control" id="slc-editar-sucursal">
                  </select>
                </div>
                <div class="form-group">
                  <label>Municipio:</label>
                  <input type="text" name="" id="txt-municipio-editar" class="form-control" disabled>
                </div>
                <div class="form-group">
                  <label>Empresa:</label>
                  <input type="text" name="" id="txt-empresa-editar" class="form-control" disabled>
                </div>
                <div class="form-group">
                  <label>Telefono:</label>
                  <input type="text" class="form-control" id="txt-telefono-editar" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <label>Gerente:</label>
                  <input type="text" class="form-control" id="txt-gerente-editar" placeholder="Gerente">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" id="btn-agregar-sucursal"'>Registrar Sucursal</button>
            </div>
          </div>
        </div>
      </div>


</div>




  <script src='js/jquery-3.4.1.min.js'></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
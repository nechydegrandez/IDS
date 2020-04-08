<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/devoluciones.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
<h1 style="color: white;">Devoluciones</h1>


<form  class="inf card form" action="">
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

<div class="inf card pt-0 pl-0 pr-0" style="font-size: 15px;">
  <div id="tabla-devoluciones">
  <table class="table table-striped text-center">
    <thead>
    <tr>
    <th class="text-center pl-0 pr-0">Codigo Devolucion</th>
    <th class="text-center pl-0 pr-0">Sucursal</th>
    <th class="text-center pl-0 pr-0">Fecha</th>
    <th class="text-center pl-0 pr-0">Total Devolucion</th>
    <th class="text-center pl-0 pr-0">Estado</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th class="text-center">Ejemplo</th>
    <td class="text-center">Ejemplo</td>
    <td class="text-center">Ejemplo</td>
    <td class="text-center">Ejemplo</td>
    <td class="text-center"><select name="slc-estado" id="slc-estado" class="form-control">
    <option value="value1">Pendiente</option>
    <option value="value1">Recogida</option>'
    </select></td>
    <td><button class="btn btn-link btn-sm">Informe Devolucion</button></td>
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
<button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">Registrar Devolucion</button>
  </div>
  
      
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel">Nueva Devolucion</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                <label>Empresa:</label>
                  <select id="slc-empresa-devolucion" class="form-control">
            
                  </select>
                </div>
                <div class="form-group">
                  <label>Sucursal:</label>
                  <select name="" id="slc-sucursal" class="form-control">
                    <option value="ejemplo1">1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Fecha de Devolucion:</label>
                  <input type="date" class="form-control" id="txt-fecha-devolucion" placeholder="Direccion">
                </div>
                <div class="form-group">
                  <label>Estado:</label>
                  <select name="" id="slc-estado-devolucion" class="form-control">
                    <option value="Pendiente">Pendiente</option>
                    <option value="Recogido">Recogido</option>
                  </select>
                </div>
                <div class="card-content">
                  <label>Total Devolucion:</label>
                  <input type="number" class="form-control" id="txt-total-devolucion" placeholder="Total Devolucion">
                  </div>
                </div>
              </form>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button id="btn-agregar-devolucion" type="button" class="btn btn-primary">Registrar Devolucion</button>
            </div>
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
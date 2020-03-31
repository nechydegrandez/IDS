<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario producto elaborado</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/inventarioproductoelaborado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    
    <?php
    include ("menu.html") ;
      ?> 
    
    
    <h1 style="color:white;">Inventario</h1>
      
    <div class="inf align-items-center pt-0 pl-0 pr-0 border rounded" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Codigo</th>
      <th class="text-center">Producto</th>
      <th class="text-center">Fecha Elaboracion</th>
      <th class="text-center">Fecha Vencimiento</th>
      <th class="text-center">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-center">1</th>
      <td class="text-center">Espumilla 12 und</td>
      <td class="text-center">27/02/2020</td>
      <td class="text-center">31/03/2020</td>
      <td class="text-center">20</td>
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

  </div>

  <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">Agregar Producto a Inventario</button>
      
  
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Agregar Producto a Inventario</h5>
                </div>
                <div class="modal-body">
              <form class="form">
              <div class="form-group">
                  <label>Codigo del Producto:</label>
                  <select class="form-control" id="slc-codigo-producto">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Fecha de Elaboracion:</label>
                  <input type="date" class="form-control" id="txt-fecha-elaboracion">
              </div>
                <div class="form-group">
                  <label>Fecha Vencimiento:</label>
                  <input type="date" class="form-control" id="txt-fecha-vencimiento">
                </div>
              <div class="form-group">
                  <label>Cantidad:</label>
                  <input type="number" class="form-control" id="txt-cantidad" placeholder="Cantidad">
              </div>
              </form>
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" onclick='alert("Se agrego correctamente")'>Agregar a Inventario</button>
                </div>
              </div>
            </div>
          </div>
    
    
    </div>
    
</div>
    




<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="js/bootstrap.min.js"></script>    

<script src="js/menu.js"></script>
</body>
</html>
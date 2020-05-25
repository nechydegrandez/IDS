<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/registrar-producto-vendido.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
    <?php
    include ("menu.html") ;
      ?> 
    
  
    <h1 style="color: white;">Registrar Producto Vendido</h1>

    <div class="inf align-items-center pt-0 pl-0 pr-0" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Código Producto</th>
      <th class="text-center">Nombre del Producto</th>
      <th class="text-center">Precio</th>
      <th class="text-center">Cantidad</th>
      <th class="text-center">Día</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-center">1</th>
      <td class="text-center">Espumilla Pequeña</td>
      <td class="text-center">25.00</td>
      <td class="text-center">72</td>
      <td class="text-center">08/03/2020</td>
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
  <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">Registrar Ventas del Dia</button>
      
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel">Registrar Ventas del Dia</h5>
            </div>
            <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Fecha</label>
                  <input type="date" class="form-control" id="txt-fecha" placeholder="Direccion">
                </div>
                <div class="form-group">
                  <label>Productos:</label>
                  <select name="" id="" class="form-control">
                    <option value="">Espumilla Pequeña(Walmart)</option>
                    <option value="">Espumilla Grande(Walmart)</option>
                    <option value="">Espumilla Pequeña(La Colonia)</option>
                    <option value="">Espumilla Grande(La Colonia)</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Cantidad:</label>
                  <input type="number" class="form-control" id="txt-fecha" placeholder="Cantidad">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick='alert("Venta Registrada Correctamente")'>Registrar Venta</button>
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

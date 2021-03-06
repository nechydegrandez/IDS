<?php
//empleado
session_start();
    if (!isset($_SESSION["usr"]) || !isset($_SESSION["psw"])){
        header("Location: login.php");
    }

    include("class/conexion.php");
    $conexion = new Conexion();
     $sql = sprintf( 
        "SELECT * FROM usuarios WHERE usuario = '%s' and contrasenia = '%s' and idtipousuario = %s",
        $_SESSION["usr"],
        $_SESSION["psw"],
        $_SESSION["tipUsr"]);

    //echo $sql;
    //exit;
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)<=0){


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/facturas.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--- aqui incluyo el menu-->
  <?php
    if  ($_SESSION["tipUsr"]==1) {
      include ("menu-admin.html") ;
    }
    else {
    include ("menu.html") ;
    }
      ?> 
  
<h1 style="color: white;">Pedidos</h1>




<div class="inf align-items-center pt-0 pl-0 pr-0 border rounded" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">No. de Pedido</th>
      <th class="text-center">Fecha Pedido</th>
      <th class="text-center">fecha Limite </th>
      <th class="text-center">Total Pedido</th>
      <th class="text-center">Sucursal</th>
    </tr>
  </thead>
  <tbody id="body-pedidos">

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

  <!--<button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">Agregar Pedido</button>
  -->
  
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrar Pedido</h5>
                </div>
                <div class="modal-body">
              <form class="form">
                <div class="form-group">
                  <label>Empresa:</label>
                  <select name="" id="" class="form-control">
                    <option value="">La Colonia</option>
                    <option value="">Walmart</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pedido:</label>
                  <select name="" id="slc-sucursal-pedido" class="form-control"></select>
                </div>
               
                <div class="form-group">
                  <label>Fecha de Emisión:</label>
                  <input type="date" class="form-control" id="txt-fecha" placeholder="Direccion">
                </div>
                <div class="form-group">
                  <label>Fecha Limite:</label>
                  <input type="date" class="form-control" id="txt-fecha" placeholder="Direccion">
                </div>
                <hr>
                <div class="card-content">
                  <label>Total Pedido:</label>
                  <input type="number" class="form-control" id="txt-total-devolucion" placeholder="Total Pedido" required>
                  </div>
                </div>
                <div class="card-content">
                  <div>
                  <label>Productos:</label>
                  <select name="" id="slc-productos-pedido" class="form-control">
                    
                  </select>
                  <label>Cantidad:</label>
                  <input type="number" class="form-control" id="txt-fecha" placeholder="Cantidad">
                  <button class="btn btn-success mt-2">Agregar</button>
                  </div>
                </div>
                <div>
                  <table class="table table-striped mt-2">
                    <thead>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                    </thead>
                      
                    <tbody>
                      <tr>
                      <td>Espumilla Pequeña</td>
                      <td>10</td>
                      <td>25.00</td>
                      </tr>
                      <tr>
                      <td>Espumilla Grande</td>
                      <td>20</td>
                      <td>15.00</td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </form>
            </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button id="btn-agregar-pedido" type="submit" class="btn btn-primary">Registrar Pedido</button>
                </div>
              </div>
            </div>
          </div>
    
    
    </div>
    
</div>




  <script src='js/jquery-3.4.1.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/menu.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
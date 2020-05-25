
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
    <title>Inventario producto elaborado</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/inventarioproductoelaborado.css" rel="stylesheet">
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
    
    
    <h1 style="color:white;">Inventario</h1>
      
    <div class="inf align-items-center pt-0 pl-0 pr-0 border rounded" style="font-size: 15px;">
  <div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">Código</th>
      <th class="text-center">Producto</th>
      <th class="text-center">Empresa</th>
      <th class="text-center">Cantidad</th>
    </tr>
  </thead>
  <tbody id="table-inventario-producto">
    
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
  <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#modalEliminarProducto">Eliminar Producto</button>

  
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Aumentar Cantidad de Producto</h5>
                </div>
                <div class="modal-body">
              <form class="form">
              <div class="form-group">
                  <label>Producto:</label>
                  <select class="form-control" id="slc-producto-a-actualizar">
                  <option value="">...</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Cantidad Actual:</label>
                  <input type="number" class="form-control" id="txt-cantidad-actual-actualizar" disabled>
              </div>
              <div class="form-group">
                  <label>Cantidad a aumentar:</label>
                  <input type="number" class="form-control" min="1" pattern="^[0-9]+" id="txt-cantidad-a-aumentar">
              </div>
              </form>
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="btn-aumentar-cantidad-producto">Agregar a Inventario</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modalEliminarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eliminar Producto</h5>
                </div>
                <div class="modal-body">
              <form class="form">
              <div class="form-group">
                  <label>Producto:</label>
                  <select class="form-control" id="slc-producto-a-eliminar">
                  <option value="">...</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Cantidad Actual:</label>
                  <input type="number" class="form-control"  min="1" pattern="^[0-9]+" id="txt-cantidad-actual" disabled>
              </div>
              <div class="form-group">
                  <label>Cantidad a eliminar:</label>
                  <input type="number" class="form-control" min="1" pattern="^[0-9]+"  id="txt-cantidad-a-eliminar">
              </div>
              </form>
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-danger" id="btn-eliminar-producto-inventario">Eliminar Producto</button>
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
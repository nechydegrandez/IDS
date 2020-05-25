
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
    <title>Devoluciones</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/devoluciones.css" rel="stylesheet">
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
  
<h1 style="color: white;">Devoluciones</h1>


<div class="inf card pt-0 pl-0 pr-0" style="font-size: 15px;">
  <div id="tabla-devoluciones">
  <table class="table table-striped text-center">
    <thead>
    <tr>
    <th class="text-left pr-0">Sucursal</th>
    <th class="text-center pr-0">Fecha</th>
    <th class="text-center pr-0">Total Devolucion</th>
    </tr>
    </thead>
    <tbody id="body-devoluciones">

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
              <form class="form needs-validation">
                <div class="form-group">
                <label>Empresa:</label>
                  <select id="slc-empresa-devolucion" class="form-control" required>
                  <option value="">...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Sucursal:</label>
                  <select name="" id="slc-sucursal-devolucion" class="form-control" required>
                  <option value="">...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Fecha de Devolucion:</label>
                  <input type="date" class="form-control" id="txt-fecha-devolucion" placeholder="Direccion" required>
                </div>
                <div class="form-group">
                  <label>Estado:</label>
                  <select name="" id="slc-estado-devolucion" class="form-control" required>
                  <option value="">...</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Recogido">Recogido</option>
                  </select>
                </div>
                <div class="card-content">
                  <label>Total Devolucion:</label>
                  <input type="number" class="form-control" id="txt-total-devolucion" placeholder="Total Devolucion" required>
                  </div>
                </div>
              </form>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button id="btn-agregar-devolucion" type="submit" class="btn btn-primary">Registrar Devolucion</button>
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
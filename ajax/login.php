<?php
    session_start();
    include("../class/conexion.php");
    $conexion = new Conexion();
    $sql = sprintf( 
        "SELECT idtipousuario, usuario, contrasenia FROM usuarios WHERE usuario = '%s' and contrasenia = sha('%s')",
        $_POST["usuario"],
        $_POST["contrasenia"]);
 
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)>0){
        $respuesta = $conexion->obtenerFila($resultado);
        $respuesta["codigoResultado"] = 0;
		$respuesta["mensajeResultado"] = "El usuario si existe";
        $_SESSION["usr"] = $respuesta["usuario"];
        $_SESSION["psw"] = $respuesta["contrasenia"];
		$_SESSION["tipUsr"] = $respuesta["idtipousuario"];
		
		
    }else {
        $respuesta["codigoResultado"] = 1;
        $respuesta["mensajeResultado"] = "El usuario no existe";
        session_destroy();
    }
    echo json_encode($respuesta);
?>
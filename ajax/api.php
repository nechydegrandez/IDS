<?php

    include ("../class/conexion.php");
    include ("../class/class-empresas.php");
    include ("../class/class-devoluciones.php");

    $conexion = new Conexion();

    switch ($_GET["accion"]){

        case "obtener-lista-empresas":
            $empr = new empresas(null,null,null,null);
            echo $empr->obtenerListaEmpresas($conexion);
        break;

        case "obtener-lista-devoluciones":
            $dev = new devoluciones(null,null,null,null);
            echo $dev->visualizarDevoluciones($conexion);
        break;
    }
    
?>
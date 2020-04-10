<?php

    include ("../class/conexion.php");
    include ("../class/class-empresas.php");
    include ("../class/class-devoluciones.php");
    include ("../class/class-sucursales.php");
    include ("../class/class-productos.php");

    $conexion = new Conexion();

    switch ($_GET["accion"]){

        case "obtener-lista-empresas":
            $empr = new empresas(null,null,null,null);
            echo $empr->obtenerListaEmpresas($conexion);
        break;

        case "obtener-lista-devoluciones":
            $dev = new devoluciones(null,null,null,null,null);
            echo $dev->visualizarDevoluciones($conexion);
        break;

        case "obtener-lista-sucursales":
            $suc = new sucursales(null,null,null,null,null,null);
            echo $suc->visualizarSucursales($conexion);
        break;

        case "agregar-devolucion":
            $agrdev = new devoluciones(null,$_POST["Total_Devolucion"],$_POST["Fecha_Devolucion"],$_POST["Estado"],$_POST["Sucursal"]);
            echo $agrdev->agregarDevolucion($conexion);
        break;

        case "obtener-lista-productos":
            $prod = new productos(null,null,null,null);
            echo $prod->visualizarProductos($conexion);
        break;
    }
    
?>
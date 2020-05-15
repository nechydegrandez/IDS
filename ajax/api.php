<?php

    include ("../class/conexion.php");
    include ("../class/class-empresas.php");
    include ("../class/class-devoluciones.php");
    include ("../class/class-sucursales.php");
    include ("../class/class-productos.php");
    include ("../class/class-inventario-producto.php");
    include ("../class/class-pedidos.php");
    include ("../class/class-insumos.php");
    include ("../class/class-inventario-insumos.php");
    include ("../class/class-municipios.php");
    include ("../class/class-productoDefectuoso.php");
    include ("../class/class-facturas-temp.php");
    include ("../class/class-facturas.php");
    include ("../class/class-registrar-factura.php");

    $conexion = new Conexion();

    switch ($_GET["accion"]){

        case "obtener-lista-empresas":
            $empr = new empresas(null,null,null);
            echo $empr->obtenerListaEmpresas($conexion);
        break;

        case "obtener-lista-devoluciones":
            $dev = new devoluciones(null,null,null,null,null);
            echo $dev->visualizarDevoluciones($conexion);
        break;

        case "obtener-lista-sucursales":
            $suc = new sucursales(null,null,null,null,null,null);
            echo $suc->visualizarSucursales($conexion,);
        break;

        case "agregar-devolucion":
            $agrdev = new devoluciones(null,$_POST["Total_Devolucion"],$_POST["Fecha_Devolucion"],$_POST["Estado"],$_POST["Sucursal"]);
            echo $agrdev->agregarDevolucion($conexion);
        break;

        case "obtener-lista-productos":
            $prod = new productos(null,null,null,null);
            echo $prod->visualizarProductos($conexion);
        break;

        case "obtener-lista-inventario-productos":
            $invProd = new inventarioProductos(null,null,null);
            echo $invProd->visualizarInventarioProductos($conexion);
        break;

        case "obtener-lista-pedidos":
            $ped = new pedidos(null,null,null,null,null);
            echo $ped->visualizarPedidos($conexion);
        break;

        case "obtener-lista-insumos":
            $ins = new insumos(null,null,null,null);
            echo $ins->visualizarInsumos($conexion);
        break;

        case "obtener-inventario-insumos":
            $invIns = new inventarioInsumo(null,null,null,null);
            echo $invIns->visualizarInventarioInsumos($conexion);
        break;

        case "agregar-inventario-insumos":
            $agrInvIns = new inventarioInsumo(null,$_POST["Cantidad"],$_POST["FechaAdquisicion"],$_POST["Insumo"]);
            echo $agrInvIns->agregarInventarioInsumo($conexion);
        break;

        case "obtener-lista-municipios":
            $mun = new municipios(null,null,null);
            echo $mun->visualizarMunicipios($conexion);
        break;

        case "agregar-nueva-sucursal":
            $AgrSuc = new sucursales(null,$_POST["Sucursal"],$_POST["Telefono"],$_POST["Empresa"],$_POST["Municipio"],$_POST["Gerente"]);
            echo $AgrSuc->agregarSucursal($conexion);
        break;

        case "agregar-nueva-empresa":
            $AgrEmpr = new empresas($_POST["RTN"],$_POST["Nombre"],$_POST["Direccion"]);
            echo $AgrEmpr->agregarEmpresa($conexion);
        
        break;

        case "agregar-nuevo-insumo":
            $Agrins = new insumos(null,$_POST["Nombre"],$_POST["Precio"],$_POST["Proveedor"]);
            echo $Agrins->registrarInsumo($conexion);
        break;

        case "agregar-nuevo-producto":
            $Agrprod = new productos($_POST["Codigo"],$_POST["Nombre"],$_POST["Precio"],$_POST["Empresa"]);
            echo $Agrprod->registrarProducto($conexion);
        break;
        
        case "informacion-producto-factura":
            $ProdEsp = new productos($_GET["codigo-producto"],null,null,null);
            echo $ProdEsp->visualizarProductoEspecifico($conexion);
        break;

        case "obtener-sucursales-empresa":
            $sucEmpr = new sucursales(null,null,null,$_GET["codigo-empresa"],null,null);
            echo $sucEmpr->visualizarSucursalesEmpresa($conexion);
        break;

        case "informacion-producto-inventario":
            $prodInv = new inventarioProductos(null,null,$_GET["idProducto"]);
            echo $prodInv->visualizarInfoProductoEspecifico($conexion);
        break;

        case "disminuir-cantidad-bandejas":
            $dismCantBand = new inventarioProductos(null,$_POST["cantidadNueva"],$_POST["idProductoActualizar"]);
            echo $dismCantBand->disminuirInventarioProducto($conexion);
        break;

        case "añadir-producto-defectuoso":
            $agrProdDef = new productoDefectuoso(null,$_POST["cantidadEliminar"],null,$_POST["idProductoDefectuoso"]);
            echo $agrProdDef->insertarProductoDefectuoso($conexion);
        break;

        case "aumentar-cantidad-bandejas":
            $aumCantBand = new inventarioProductos(null,$_POST["cantidadAumentar"],$_POST["idProductoAumentar"]);
            echo $aumCantBand->aumentarInventarioProducto($conexion);
        break;

        case "obtener-lista-producto-defectuoso":
            $prodDef = new productoDefectuoso(null,null,null,null);
            echo $prodDef->visualizarProductosDefectuosos($conexion);
        break;

        case "agregar-producto-tabla-temporal":
            $addProdTabTemp = new DetalleTemp(null,$_POST["cantidad"],$_POST["idProducto"]);
            echo $addProdTabTemp->insertarProducto($conexion);
        break;

        case "ver-productos-tabla-temporal":
            $prodTabTemp = new DetalleTemp(null,null,null);
            echo $prodTabTemp->productosTablaTemporal($conexion);
        break;

        case "registrar-nueva-factura":
            $regFac = new registrarFacturas($_POST["Cliente"],$_POST["Direccion"],$_POST["fechaFactura"]);
            echo $regFac->registrarFactura($conexion);
        break;

        case "ver-lista-facturas":
            $verFacs = new Facturas(null,null,null,null);
            echo $verFacs->verListaFacturas($conexion);
        break;

        case "eliminar-producto-fact-temp":
            $elimProdFacTemp = new DetalleTemp(null,null,$_POST["Producto"]);
            $elimProdFacTemp->eliminarProductoTablaTemporal($conexion);
        break;



        /*case "obtener-lista-facturas":
            $fac = new pedidos(null,null,null,null,null);
            echo $fac->visualizarPedidos($conexion);
        break;*/

    }
    
?>
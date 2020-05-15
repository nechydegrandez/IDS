-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 15-05-2020 a las 05:06:49
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `espumillas`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `procesar_venta`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `procesar_venta` (IN `cod_empresa` BIGINT(14) UNSIGNED ZEROFILL, IN `cod_sucursla` INT(11), IN `fecha_factura` DATE)  BEGIN
    	
        DECLARE factura INT;
        
        DECLARE registros INT;
        
        DECLARE nueva_existencia INT;
        DECLARE existencia_actual INT;
        
        DECLARE tmp_cod_producto INT;
        DECLARE tmp_cant_producto INT;
        DECLARE a INT;
        SET a =1;
        
        CREATE TEMPORARY TABLE tbl_tmp(
        	id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            cod_prod BIGINT,
            cant_prod int
        );
        
        SET registros = (SELECT COUNT(*) as NProductos FROM detalle_temp);
        
        IF registros > 0 THEN
        
        	INSERT INTO tbl_tmp(cod_prod,cant_prod) SELECT idProducto,cantidad FROM detalle_temp;
        
        	INSERT INTO facturas(fecha_factura,empresa_idEmpresa,sucursal_idSucursal) VALUES (fecha_factura,cod_empresa,cod_sucursla);
            SET factura = LAST_INSERT_ID();
            
            INSERT INTO detalle_factura(facturas_idfacturas,cantidad,productos_idProductos) SELECT (factura) as facturas_idfacturas, cantidad,idProducto FROM detalle_temp;
            
            WHILE a <= registros DO
            	SELECT cant_prod,cod_prod INTO tmp_cant_producto,tmp_cod_producto FROM tbl_tmp WHERE id = a;
                SELECT cantidadBandejas INTO existencia_actual FROM inventario_producto WHERE Productos_idProductos = tmp_cod_producto;
                
                SET nueva_existencia = existencia_actual - tmp_cant_producto;
                UPDATE inventario_producto SET cantidadBandejas = nueva_existencia WHERE Productos_idProductos = tmp_cod_producto;
                
                set a=a+1;
                
            END WHILE;
            
            DELETE FROM detalle_temp;
            TRUNCATE TABLE tbl_tmp;
            SELECT * from facturas WHERE idfacturas = factura;
        ELSE 
        	SELECT 0;
        END IF;
        
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `nombreDepartamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `nombreDepartamento`) VALUES
(1, 'Francisco Morazan'),
(2, 'Cortes'),
(3, 'Atlántida'),
(4, 'Colón'),
(5, 'Comayagua'),
(6, 'Copán'),
(7, 'Islas de la Bahia'),
(8, 'Gracias a Dios'),
(9, 'Lempira'),
(10, 'Choluteca'),
(11, 'Valle'),
(12, 'Yoro'),
(13, 'Olancho'),
(14, 'La Paz'),
(15, 'El Paraíso'),
(16, 'Intibucá'),
(17, 'Ocotepeque'),
(18, 'Santa Bárbara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

DROP TABLE IF EXISTS `detalle_factura`;
CREATE TABLE IF NOT EXISTS `detalle_factura` (
  `idDetalle_factura` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `facturas_idfacturas` int(4) UNSIGNED ZEROFILL NOT NULL,
  `productos_idProductos` bigint(100) NOT NULL,
  PRIMARY KEY (`idDetalle_factura`),
  KEY `fk_detalle_factura_facturas1_idx` (`facturas_idfacturas`),
  KEY `fk_detalle_factura_productos1_idx` (`productos_idProductos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`idDetalle_factura`, `cantidad`, `facturas_idfacturas`, `productos_idProductos`) VALUES
(1, 50, 0001, 9818011),
(2, 50, 0001, 9831052),
(4, 36, 0002, 700000000016),
(5, 36, 0002, 127035240765);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temp`
--

DROP TABLE IF EXISTS `detalle_temp`;
CREATE TABLE IF NOT EXISTS `detalle_temp` (
  `idDetalleTemp` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `idProducto` bigint(100) NOT NULL,
  PRIMARY KEY (`idDetalleTemp`),
  KEY `FK_DetalleTemp_Producto` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

DROP TABLE IF EXISTS `devoluciones`;
CREATE TABLE IF NOT EXISTS `devoluciones` (
  `idDevoluciones` int(11) NOT NULL AUTO_INCREMENT,
  `total` decimal(45,2) DEFAULT NULL,
  `fechaDevolucion` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `sucursal` int(100) DEFAULT NULL,
  PRIMARY KEY (`idDevoluciones`),
  KEY `FK_sucursales` (`sucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`idDevoluciones`, `total`, `fechaDevolucion`, `estado`, `sucursal`) VALUES
(1, '30.00', '2020-04-09', 'Pendiente', 1),
(2, '200.00', '2020-04-14', 'Pendiente', 2),
(3, '200.00', '2020-04-10', 'Recogido', 2),
(4, '300.00', '2020-04-30', 'Recogido', 2),
(9, '20.00', '2020-04-24', 'Recogido', 5),
(10, '50.00', '2020-04-25', 'Recogido', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `idEmpleados` int(11) NOT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `Personas_idPersonas` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idEmpleados`),
  KEY `fk_Empleados_Personas1_idx` (`Personas_idPersonas`),
  KEY `fk_Empleados_Usuarios1_idx` (`Usuarios_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleados`, `cargo`, `Personas_idPersonas`, `Usuarios_idUsuario`) VALUES
(1, 'administrador', 1, 1),
(2, 'repartidor', 2, 2),
(3, 'repartidor', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `idEmpresa` bigint(14) UNSIGNED ZEROFILL NOT NULL,
  `nombreEmpresa` varchar(45) DEFAULT NULL,
  `direccionPrincipal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `nombreEmpresa`, `direccionPrincipal`) VALUES
(08019995224132, 'La Colonia', 'Colonia Alameda'),
(08019999176681, 'Walmart', 'Blv. Centroamerica, Edificio IPM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

DROP TABLE IF EXISTS `facturas`;
CREATE TABLE IF NOT EXISTS `facturas` (
  `idfacturas` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `fecha_factura` date DEFAULT NULL,
  `empresa_idEmpresa` bigint(14) UNSIGNED ZEROFILL NOT NULL,
  `sucursal_idSucursal` int(11) NOT NULL,
  PRIMARY KEY (`idfacturas`),
  KEY `fk_facturas_empresa1_idx` (`empresa_idEmpresa`),
  KEY `fk_facturas_sucursal1_idx` (`sucursal_idSucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`idfacturas`, `fecha_factura`, `empresa_idEmpresa`, `sucursal_idSucursal`) VALUES
(0001, '2020-05-20', 08019999176681, 3),
(0002, '2020-05-19', 08019995224132, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

DROP TABLE IF EXISTS `insumos`;
CREATE TABLE IF NOT EXISTS `insumos` (
  `idInsumos` int(11) NOT NULL AUTO_INCREMENT,
  `nombreInsumo` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `proveedor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idInsumos`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`idInsumos`, `nombreInsumo`, `precio`, `proveedor`) VALUES
(1, 'Saco de Azucar', 923, 'Central de Ingenios'),
(2, 'Clara', 12, 'Gustavo Turcios'),
(3, 'Gas', 1550, 'Servigas'),
(4, 'Colorante Alimenticio', 300, 'Casa de la Azucar'),
(5, 'Manteca', 540, 'Bodega MARDEL'),
(6, 'Harina', 760, 'Molino Arinero Sula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_insumos`
--

DROP TABLE IF EXISTS `inventario_insumos`;
CREATE TABLE IF NOT EXISTS `inventario_insumos` (
  `idInventario_Insumos` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  `fechaLlegada` date DEFAULT NULL,
  `Insumos_idInsumos` int(11) NOT NULL,
  PRIMARY KEY (`idInventario_Insumos`),
  KEY `fk_Inventario_Insumos_Insumos1_idx` (`Insumos_idInsumos`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inventario_insumos`
--

INSERT INTO `inventario_insumos` (`idInventario_Insumos`, `cantidad`, `fechaLlegada`, `Insumos_idInsumos`) VALUES
(1, 20, '2020-03-14', 2),
(2, 100, '2020-03-20', 1),
(3, 5, '2020-03-14', 4),
(4, 10, '2020-03-14', 5),
(5, 50, '2020-03-14', 6),
(6, 20, '2020-04-28', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_producto`
--

DROP TABLE IF EXISTS `inventario_producto`;
CREATE TABLE IF NOT EXISTS `inventario_producto` (
  `idinventario_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `cantidadBandejas` varchar(45) DEFAULT NULL,
  `Productos_idProductos` bigint(100) NOT NULL,
  PRIMARY KEY (`idinventario_Producto`),
  KEY `FK_Producto_Inventario` (`Productos_idProductos`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inventario_producto`
--

INSERT INTO `inventario_producto` (`idinventario_Producto`, `cantidadBandejas`, `Productos_idProductos`) VALUES
(1, '150', 127035240765),
(2, '100', 700000000016),
(3, '70', 9818011),
(4, '120', 9831052),
(5, '230', 70599438),
(6, '100', 7000000000164);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

DROP TABLE IF EXISTS `municipio`;
CREATE TABLE IF NOT EXISTS `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `nombreMunicipio` varchar(45) DEFAULT NULL,
  `Departamento_idDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idMunicipio`),
  KEY `fk_Municipio_Departamento1_idx` (`Departamento_idDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `nombreMunicipio`, `Departamento_idDepartamento`) VALUES
(101, 'Comayaguela', 1),
(102, 'Santa Lucia', 1),
(104, 'La Ceiba', 3),
(105, 'San Pedro Sula', 2),
(106, 'Tegucigalpa M.D.C', 1),
(107, 'Santa Ana', 1),
(108, 'Omoa', 2),
(109, 'Comayagua', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `fechaPedido` date DEFAULT NULL,
  `fechaLimite` date DEFAULT NULL,
  `totalPedido` decimal(45,2) DEFAULT NULL,
  `Sucursal_idSucursal` int(11) NOT NULL,
  PRIMARY KEY (`idPedidos`),
  KEY `fk_Pedidos_Sucursal1_idx` (`Sucursal_idSucursal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedidos`, `fechaPedido`, `fechaLimite`, `totalPedido`, `Sucursal_idSucursal`) VALUES
(1, '2020-03-02', '2020-03-10', '2000.00', 1),
(2, '2020-02-25', '2020-03-01', '2000.00', 1),
(3, '2020-03-15', '2020-03-30', '2000.00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_productos`
--

DROP TABLE IF EXISTS `pedidos_productos`;
CREATE TABLE IF NOT EXISTS `pedidos_productos` (
  `Pedidos_idPedidos` int(11) NOT NULL,
  `Productos_idProductos` bigint(100) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  PRIMARY KEY (`Pedidos_idPedidos`,`Productos_idProductos`),
  KEY `fk_Pedidos_has_Productos_Productos1_idx` (`Productos_idProductos`),
  KEY `fk_Pedidos_has_Productos_Pedidos1_idx` (`Pedidos_idPedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos_productos`
--

INSERT INTO `pedidos_productos` (`Pedidos_idPedidos`, `Productos_idProductos`, `cantidad`, `subtotal`) VALUES
(1, 127035240765, 100, 2000),
(1, 700000000016, 30, 500),
(2, 700000000016, 100, 153.3),
(3, 700000000016, 200, 3066);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `idPersonas` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nidentidad` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPersonas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPersonas`, `nombre`, `apellido`, `nidentidad`, `correo`, `direccion`, `telefono`, `genero`) VALUES
(1, 'Paulo', 'Londra', '08001-1995-09876', 'pauloandre_95@hotmail.com', 'Col.Kennedy', '991934-45', 'm'),
(2, 'Mario', 'Barahona', '-762', 'Marioan_97@gmail.com', 'Col.Miraflores', '998904-95', 'm'),
(3, 'Mario', 'Lopez', '-762', 'Marian_976@gmail.com', 'Col.Miraflores', '997977-95', 'f'),
(4, 'Samanta', 'Martinez', '-33892', 'Saman_97@gmail.com', 'Col.Navio', '961964-85', 'f'),
(5, 'Fernando', 'Mendez', '-281587', 'Fernda_94@gmail.com', 'Col.Llanos', '991934-45', 'm'),
(6, 'Nola', 'Martinez', '-70535', 'Nsaid_93@gmail.com', 'Col.Jose', '901934-05', 'm'),
(7, 'Germa', 'Guevara', '1617', 'German_98@gmail.com', 'Col.Alema', '971984-55', 'm'),
(8, 'Sabrina', 'Barahona', '-2413', 'Marie_93@gmail.com', 'Col.Jacaleapa', '891984-15', 'f'),
(9, 'Maria', 'Cardona', '-2757', 'mjHer_95@gmail.com', 'Col.SanMiguel', '871934-25', 'f'),
(10, 'Carlos', 'Franco', '-3860', 'Carlosr_95@gmail.com', 'Col.Pedregal', '819934-35', 'm'),
(11, 'Francis', 'Ramos', '-2783', 'Rubygo_94@gmail.com', 'Col.Vega', '959340-15', 'f'),
(12, 'Oscar', 'Reyes', '1176', 'Oscaro_92@gmail.com', 'Col.America', '941734-05', 'm'),
(13, 'Brya', 'Alvarez', '-2645', 'Leoro_93@gmail.com', 'Col.San Angel', '973934-75', 'm'),
(14, 'Luis', 'Nu?ez', '-2711', 'luisf_91@gmail.com', 'Col.San Francisco', '987934-05', 'm'),
(15, 'Heidy', 'Erazo', '909', 'Hmabel_94@gmail.com', 'Col.Chimbo', '964934-89', 'f'),
(16, 'Angel', 'Guzma', '-3868', 'Angeld_93@gmail.com', 'Col.Suyapa', '990904-45', 'm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productodefectuoso`
--

DROP TABLE IF EXISTS `productodefectuoso`;
CREATE TABLE IF NOT EXISTS `productodefectuoso` (
  `idproductoDefectuoso` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  `fechaRegistrado` date NOT NULL,
  `Productos_idProductos` bigint(100) NOT NULL,
  PRIMARY KEY (`idproductoDefectuoso`),
  KEY `FK_Producto_Daniado` (`Productos_idProductos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productodefectuoso`
--

INSERT INTO `productodefectuoso` (`idproductoDefectuoso`, `cantidad`, `fechaRegistrado`, `Productos_idProductos`) VALUES
(1, 15, '2020-05-06', 70599438),
(2, 50, '2020-05-06', 127035240765);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idProductos` bigint(100) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precioVenta` decimal(10,2) DEFAULT NULL,
  `empresa` bigint(14) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `FK_empresa` (`empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `nombre`, `precioVenta`, `empresa`) VALUES
(9818011, 'Bandeja de Espumilla 12 unds', '15.00', 08019999176681),
(9831052, 'Bandeja de Espumillita', '25.00', 08019999176681),
(70599438, 'Bolsas de Pan para Torreja', '32.00', 08019999176681),
(127035240765, 'Bandeja de Espumillitas', '25.00', 08019995224132),
(700000000016, 'Bandeja de Espumilla 12 unds', '15.33', 08019995224132),
(7000000000164, 'Bolsas de Bolillos', '33.00', 08019995224132);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_has_insumos`
--

DROP TABLE IF EXISTS `productos_has_insumos`;
CREATE TABLE IF NOT EXISTS `productos_has_insumos` (
  `Productos_idProductos` bigint(100) NOT NULL,
  `Insumos_idInsumos` int(11) NOT NULL,
  PRIMARY KEY (`Productos_idProductos`,`Insumos_idInsumos`),
  KEY `fk_Productos_has_Insumos_Insumos1_idx` (`Insumos_idInsumos`),
  KEY `fk_Productos_has_Insumos_Productos1_idx` (`Productos_idProductos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos_has_insumos`
--

INSERT INTO `productos_has_insumos` (`Productos_idProductos`, `Insumos_idInsumos`) VALUES
(9818011, 1),
(9831052, 1),
(70599438, 1),
(127035240765, 1),
(700000000016, 1),
(7000000000164, 1),
(9818011, 2),
(9831052, 2),
(127035240765, 2),
(700000000016, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE IF NOT EXISTS `sucursal` (
  `idSucursal` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTienda` varchar(45) DEFAULT NULL,
  `telefonoTienda` varchar(45) DEFAULT NULL,
  `Empresa_idEmpresa` bigint(14) UNSIGNED ZEROFILL NOT NULL,
  `Municipio_idMunicipio` int(11) NOT NULL,
  `Gerente` varchar(200) NOT NULL,
  PRIMARY KEY (`idSucursal`),
  KEY `fk_Sucursal_Municipio1_idx` (`Municipio_idMunicipio`),
  KEY `FK_empresaSucursal` (`Empresa_idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idSucursal`, `nombreTienda`, `telefonoTienda`, `Empresa_idEmpresa`, `Municipio_idMunicipio`, `Gerente`) VALUES
(1, 'La Colonia #2', '504-2203-4567', 08019995224132, 101, 'Jose Gamez'),
(2, 'La Colonia #10', '504-2223-1497', 08019995224132, 106, 'Angel Bulnes'),
(3, 'Walmart Cascadas Mall', '504-9786-4532', 08019999176681, 106, 'David Bulnes'),
(4, 'Walmart Anillo Periferico', '504-2303-4567', 08019999176681, 106, 'Alejandro Bautista'),
(5, 'La Colonia #7', '504_98909090', 08019995224132, 106, 'Johana Gutierrez'),
(7, 'La Colonia #4', '504-2235-0347', 08019995224132, 106, 'Milisenth Cruz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `TipoUsuario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `TipoUsuario`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `contrasenia` varchar(45) DEFAULT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `personas` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuarios_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`),
  KEY `FK_personas` (`personas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `contrasenia`, `TipoUsuario_idTipoUsuario`, `estado`, `personas`) VALUES
(1, 'asd.456', 2, 'a', 1),
(2, 'asd.456', 1, 'a', 10),
(3, 'asd.456', 2, 'a', 8),
(4, 'asd.456', 2, 'i', 7);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `fk_detalle_factura_facturas1` FOREIGN KEY (`facturas_idfacturas`) REFERENCES `facturas` (`idfacturas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detalle_factura_productos1` FOREIGN KEY (`productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD CONSTRAINT `FK_DetalleTemp_Producto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD CONSTRAINT `FK_sucursales` FOREIGN KEY (`sucursal`) REFERENCES `sucursal` (`idSucursal`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_Empleados_Personas1` FOREIGN KEY (`Personas_idPersonas`) REFERENCES `personas` (`idPersonas`),
  ADD CONSTRAINT `fk_Empleados_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `fk_facturas_empresa1` FOREIGN KEY (`empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_facturas_sucursal1` FOREIGN KEY (`sucursal_idSucursal`) REFERENCES `sucursal` (`idSucursal`);

--
-- Filtros para la tabla `inventario_insumos`
--
ALTER TABLE `inventario_insumos`
  ADD CONSTRAINT `fk_Inventario_Insumos_Insumos1` FOREIGN KEY (`Insumos_idInsumos`) REFERENCES `insumos` (`idInsumos`);

--
-- Filtros para la tabla `inventario_producto`
--
ALTER TABLE `inventario_producto`
  ADD CONSTRAINT `FK_Producto_Inventario` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_Municipio_Departamento1` FOREIGN KEY (`Departamento_idDepartamento`) REFERENCES `departamento` (`idDepartamento`);

--
-- Filtros para la tabla `productodefectuoso`
--
ALTER TABLE `productodefectuoso`
  ADD CONSTRAINT `FK_Producto_Daniado` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_empresa` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`idEmpresa`);

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `FK_empresaSucursal` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

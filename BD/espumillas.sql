-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 09-04-2020 a las 23:33:15
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
  KEY `FK_sucursal` (`sucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`idDevoluciones`, `total`, `fechaDevolucion`, `estado`, `sucursal`) VALUES
(1, '30.00', '2020-04-09', 'Pendiente', 1),
(2, '200.00', '2020-04-14', 'Pendiente', 2),
(3, '200.00', '2020-04-10', 'Recogido', 2),
(4, '300.00', '2020-04-30', 'Recogido', 2);

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
  `idEmpresa` int(11) NOT NULL,
  `nombreEmpresa` varchar(45) DEFAULT NULL,
  `RTN` varchar(45) DEFAULT NULL,
  `direccionPrincipal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `nombreEmpresa`, `RTN`, `direccionPrincipal`) VALUES
(1, 'Walmart', '08019999176681', 'Blv. Centroamerica, Edificio IPM'),
(2, 'La Colonia', '08019995224132', 'Colonia Alameda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

DROP TABLE IF EXISTS `insumos`;
CREATE TABLE IF NOT EXISTS `insumos` (
  `idInsumos` int(11) NOT NULL,
  `nombreInsumo` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `proveedor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idInsumos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `idInventario_Insumos` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fechaLlegada` date DEFAULT NULL,
  `Insumos_idInsumos` int(11) NOT NULL,
  PRIMARY KEY (`idInventario_Insumos`),
  KEY `fk_Inventario_Insumos_Insumos1_idx` (`Insumos_idInsumos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inventario_insumos`
--

INSERT INTO `inventario_insumos` (`idInventario_Insumos`, `cantidad`, `fechaLlegada`, `Insumos_idInsumos`) VALUES
(1, 20, '2020-03-14', 2),
(2, 100, '2020-03-14', 1),
(3, 5, '2020-03-14', 4),
(4, 10, '2020-03-14', 5),
(5, 50, '2020-03-14', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_producto`
--

DROP TABLE IF EXISTS `inventario_producto`;
CREATE TABLE IF NOT EXISTS `inventario_producto` (
  `idinventario_Producto` int(11) NOT NULL,
  `cantidadBandejas` varchar(45) DEFAULT NULL,
  `fechaElaboracion` date DEFAULT NULL,
  `fechaVencimiento` date DEFAULT NULL,
  `Productos_idProductos` int(11) NOT NULL,
  PRIMARY KEY (`idinventario_Producto`),
  KEY `fk_inventario_Producto_Productos1_idx` (`Productos_idProductos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inventario_producto`
--

INSERT INTO `inventario_producto` (`idinventario_Producto`, `cantidadBandejas`, `fechaElaboracion`, `fechaVencimiento`, `Productos_idProductos`) VALUES
(1, '50', '2020-03-14', '2020-05-31', 765),
(2, '50', '2020-03-14', '2020-05-31', 16),
(3, '50', '2020-03-14', '2020-05-31', 9818011),
(4, '50', '2020-03-14', '2020-05-31', 9831052),
(5, '50', '2020-03-14', '2020-03-31', 70599438);

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
  `fechaRegistro` date DEFAULT NULL,
  `fechaLimite` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `TotalPagar` double DEFAULT NULL,
  `Empleados_idEmpleados` int(11) NOT NULL,
  `Sucursal_idSucursal` int(11) NOT NULL,
  PRIMARY KEY (`idPedidos`),
  KEY `fk_Pedidos_Empleados1_idx` (`Empleados_idEmpleados`),
  KEY `fk_Pedidos_Sucursal1_idx` (`Sucursal_idSucursal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedidos`, `fechaRegistro`, `fechaLimite`, `estado`, `TotalPagar`, `Empleados_idEmpleados`, `Sucursal_idSucursal`) VALUES
(1, '2020-03-02', '2020-03-10', 'pendiente', 2000, 2, 1),
(2, '2020-02-25', '2020-03-01', 'pendiente', 2000, 2, 1),
(3, '2020-03-15', '2020-03-30', 'pendiente', 2000, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_productos`
--

DROP TABLE IF EXISTS `pedidos_productos`;
CREATE TABLE IF NOT EXISTS `pedidos_productos` (
  `Pedidos_idPedidos` int(11) NOT NULL,
  `Productos_idProductos` int(11) NOT NULL,
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
(1, 16, 30, 500),
(1, 765, 100, 2000),
(2, 16, 100, 153.3),
(3, 16, 200, 3066);

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
  `idproductoDefectuoso` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `Productos_idProductos` int(11) NOT NULL,
  PRIMARY KEY (`idproductoDefectuoso`),
  KEY `fk_productoDefectuoso_Productos1_idx` (`Productos_idProductos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productodefectuoso`
--

INSERT INTO `productodefectuoso` (`idproductoDefectuoso`, `cantidad`, `fecha`, `Productos_idProductos`) VALUES
(1, 25, '2020-03-14', 765),
(2, 25, '2020-03-14', 16),
(3, 25, '2020-03-14', 9818011),
(4, 25, '2020-03-14', 9831052);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idProductos` int(100) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precioVenta` double DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `FK_empresas` (`empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `nombre`, `precioVenta`, `empresa`) VALUES
(16, 'Bandeja de Espumilla 12 unds', 15.33, 2),
(164, 'Bolsas de Bolillos', 33, 2),
(765, 'Bandeja de Espumillitas', 25, 2),
(9818011, 'Bandeja de Espumilla 12 unds', 15, 1),
(9831052, 'Bandeja de Espumillita', 25, 1),
(70599438, 'Bolsas de Pan para Torreja', 32, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_has_insumos`
--

DROP TABLE IF EXISTS `productos_has_insumos`;
CREATE TABLE IF NOT EXISTS `productos_has_insumos` (
  `Productos_idProductos` int(11) NOT NULL,
  `Insumos_idInsumos` int(11) NOT NULL,
  PRIMARY KEY (`Productos_idProductos`,`Insumos_idInsumos`),
  KEY `fk_Productos_has_Insumos_Insumos1_idx` (`Insumos_idInsumos`),
  KEY `fk_Productos_has_Insumos_Productos1_idx` (`Productos_idProductos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos_has_insumos`
--

INSERT INTO `productos_has_insumos` (`Productos_idProductos`, `Insumos_idInsumos`) VALUES
(16, 1),
(164, 1),
(9818011, 1),
(9831052, 1),
(70599438, 1),
(2147483647, 1),
(16, 2),
(9818011, 2),
(9831052, 2),
(2147483647, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE IF NOT EXISTS `sucursal` (
  `idSucursal` int(11) NOT NULL,
  `nombreTienda` varchar(45) DEFAULT NULL,
  `telefonoTienda` varchar(45) DEFAULT NULL,
  `Empresa_idEmpresa` int(11) NOT NULL,
  `Municipio_idMunicipio` int(11) NOT NULL,
  `Gerente` int(11) NOT NULL,
  PRIMARY KEY (`idSucursal`),
  KEY `fk_Sucursal_Empresa1_idx` (`Empresa_idEmpresa`),
  KEY `fk_Sucursal_Municipio1_idx` (`Municipio_idMunicipio`),
  KEY `fk_Sucursal_Personas1_idx` (`Gerente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idSucursal`, `nombreTienda`, `telefonoTienda`, `Empresa_idEmpresa`, `Municipio_idMunicipio`, `Gerente`) VALUES
(1, 'La Colonia #2', '504-2203-4567', 2, 101, 1),
(2, 'La Colonia #10', '504-2223-1497', 2, 106, 2),
(3, 'Walmart Cascadas Mall', '504-9786-4532', 1, 106, 3),
(4, 'Walmart Anillo Periferico', '504-2303-4567', 1, 108, 4),
(5, 'La Colonia #7', '504_98909090', 2, 106, 5),
(6, 'La Colonia #2', '504-2450-3456', 2, 101, 6),
(7, 'La Colonia #4', '504-2235-0347', 2, 109, 9);

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
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuarios_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `contrasenia`, `TipoUsuario_idTipoUsuario`, `estado`) VALUES
(1, 'asd.456', 2, 'a'),
(2, 'asd.456', 1, 'a'),
(3, 'asd.456', 2, 'a'),
(4, 'asd.456', 2, 'i');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD CONSTRAINT `FK_sucursal` FOREIGN KEY (`sucursal`) REFERENCES `sucursal` (`idSucursal`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_Empleados_Personas1` FOREIGN KEY (`Personas_idPersonas`) REFERENCES `personas` (`idPersonas`),
  ADD CONSTRAINT `fk_Empleados_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `inventario_insumos`
--
ALTER TABLE `inventario_insumos`
  ADD CONSTRAINT `fk_Inventario_Insumos_Insumos1` FOREIGN KEY (`Insumos_idInsumos`) REFERENCES `insumos` (`idInsumos`);

--
-- Filtros para la tabla `inventario_producto`
--
ALTER TABLE `inventario_producto`
  ADD CONSTRAINT `fk_inventario_Producto_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_Municipio_Departamento1` FOREIGN KEY (`Departamento_idDepartamento`) REFERENCES `departamento` (`idDepartamento`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_Pedidos_Empleados1` FOREIGN KEY (`Empleados_idEmpleados`) REFERENCES `empleados` (`idEmpleados`),
  ADD CONSTRAINT `fk_Pedidos_Sucursal1` FOREIGN KEY (`Sucursal_idSucursal`) REFERENCES `sucursal` (`idSucursal`);

--
-- Filtros para la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  ADD CONSTRAINT `fk_Pedidos_has_Productos_Pedidos1` FOREIGN KEY (`Pedidos_idPedidos`) REFERENCES `pedidos` (`idPedidos`),
  ADD CONSTRAINT `fk_Pedidos_has_Productos_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `productodefectuoso`
--
ALTER TABLE `productodefectuoso`
  ADD CONSTRAINT `fk_productoDefectuoso_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_empresas` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`idEmpresa`);

--
-- Filtros para la tabla `productos_has_insumos`
--
ALTER TABLE `productos_has_insumos`
  ADD CONSTRAINT `fk_Productos_has_Insumos_Insumos1` FOREIGN KEY (`Insumos_idInsumos`) REFERENCES `insumos` (`idInsumos`),
  ADD CONSTRAINT `fk_Productos_has_Insumos_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `fk_Sucursal_Empresa1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`),
  ADD CONSTRAINT `fk_Sucursal_Municipio1` FOREIGN KEY (`Municipio_idMunicipio`) REFERENCES `municipio` (`idMunicipio`),
  ADD CONSTRAINT `fk_Sucursal_Personas1` FOREIGN KEY (`Gerente`) REFERENCES `personas` (`idPersonas`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

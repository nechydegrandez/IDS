USE [master]
GO
/****** Object:  Database [BD]    Script Date: 16/02/2020 17:49:17 ******/
CREATE DATABASE [BD]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'BD', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\BD.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'BD_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\BD_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [BD] SET COMPATIBILITY_LEVEL = 140
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [BD].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [BD] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [BD] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [BD] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [BD] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [BD] SET ARITHABORT OFF 
GO
ALTER DATABASE [BD] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [BD] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [BD] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [BD] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [BD] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [BD] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [BD] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [BD] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [BD] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [BD] SET  DISABLE_BROKER 
GO
ALTER DATABASE [BD] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [BD] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [BD] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [BD] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [BD] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [BD] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [BD] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [BD] SET RECOVERY FULL 
GO
ALTER DATABASE [BD] SET  MULTI_USER 
GO
ALTER DATABASE [BD] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [BD] SET DB_CHAINING OFF 
GO
ALTER DATABASE [BD] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [BD] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [BD] SET DELAYED_DURABILITY = DISABLED 
GO
EXEC sys.sp_db_vardecimal_storage_format N'BD', N'ON'
GO
ALTER DATABASE [BD] SET QUERY_STORE = OFF
GO
USE [BD]
GO
/****** Object:  Table [dbo].[categoria]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[categoria](
	[idcategoria] [int] NOT NULL,
	[descripcion] [varchar](45) NULL,
PRIMARY KEY CLUSTERED 
(
	[idcategoria] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Departamento]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Departamento](
	[idDepartamento] [int] NOT NULL,
	[nombreDepartamento] [varchar](45) NULL,
PRIMARY KEY CLUSTERED 
(
	[idDepartamento] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Devoluciones]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Devoluciones](
	[idDevoluciones] [int] NOT NULL,
	[cantidad] [varchar](45) NULL,
	[fechaDevolucion] [date] NULL,
	[estado] [varchar](45) NULL,
	[Pedidos_idPedidos] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idDevoluciones] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Empleados]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Empleados](
	[idEmpleados] [int] NOT NULL,
	[cargo] [varchar](45) NULL,
	[Personas_idPersonas] [int] NOT NULL,
	[Usuarios_idUsuario] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idEmpleados] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Empresa]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Empresa](
	[idEmpresa] [int] NOT NULL,
	[nombreEmpresa] [varchar](45) NULL,
	[RTN] [varchar](45) NULL,
	[direccionPrincipal] [varchar](45) NULL,
PRIMARY KEY CLUSTERED 
(
	[idEmpresa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Insumos]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Insumos](
	[idInsumos] [int] NOT NULL,
	[nombreInsumo] [varchar](45) NULL,
	[precio] [float] NULL,
	[proveedor] [varchar](45) NULL,
PRIMARY KEY CLUSTERED 
(
	[idInsumos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Inventario_Insumos]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Inventario_Insumos](
	[idInventario_Insumos] [int] NOT NULL,
	[cantidad] [int] NULL,
	[fechaLlegada] [date] NULL,
	[Insumos_idInsumos] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idInventario_Insumos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[inventario_Producto]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[inventario_Producto](
	[idinventario_Producto] [int] NOT NULL,
	[cantidadBandejas] [varchar](45) NULL,
	[fechaElaboracion] [date] NULL,
	[fechaVencimiento] [date] NULL,
	[Productos_idProductos] [varchar](45) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idinventario_Producto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Municipio]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Municipio](
	[idMunicipio] [int] NOT NULL,
	[nombreMunicipio] [varchar](45) NULL,
	[Departamento_idDepartamento] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idMunicipio] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Pedidos]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Pedidos](
	[idPedidos] [int] NOT NULL,
	[fechaRegistro] [date] NULL,
	[fechaLimite] [date] NULL,
	[estado] [varchar](45) NULL,
	[TotalPagar] [float] NULL,
	[Empleados_idEmpleados] [int] NOT NULL,
	[Sucursal_idSucursal] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idPedidos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Pedidos_Productos]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Pedidos_Productos](
	[Pedidos_idPedidos] [int] NOT NULL,
	[Productos_idProductos] [varchar](45) NOT NULL,
	[cantidad] [int] NULL,
	[subtotal] [float] NULL,
PRIMARY KEY CLUSTERED 
(
	[Pedidos_idPedidos] ASC,
	[Productos_idProductos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Personas]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Personas](
	[idPersonas] [int] NOT NULL,
	[nombre] [varchar](45) NULL,
	[apellido] [varchar](45) NULL,
	[nidentidad] [varchar](45) NULL,
	[correo] [varchar](45) NULL,
	[direccion] [varchar](45) NULL,
	[telefono] [varchar](45) NULL,
	[genero] [varchar](45) NULL,
PRIMARY KEY CLUSTERED 
(
	[idPersonas] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[productoDefectuoso]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[productoDefectuoso](
	[idproductoDefectuoso] [int] NOT NULL,
	[cantidad] [int] NULL,
	[fecha] [date] NULL,
	[Productos_idProductos] [varchar](45) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idproductoDefectuoso] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Productos]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Productos](
	[idProductos] [varchar](45) NOT NULL,
	[nombre] [varchar](45) NULL,
	[precioVenta] [float] NULL,
	[categoria_idcategoria] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idProductos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Productos_has_Insumos]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Productos_has_Insumos](
	[Productos_idProductos] [varchar](45) NOT NULL,
	[Insumos_idInsumos] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[Productos_idProductos] ASC,
	[Insumos_idInsumos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Sucursal]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Sucursal](
	[idSucursal] [int] NOT NULL,
	[nombreTienda] [varchar](45) NULL,
	[telefonoTienda] [varchar](45) NULL,
	[Empresa_idEmpresa] [int] NOT NULL,
	[Municipio_idMunicipio] [int] NOT NULL,
	[Gerente] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[idSucursal] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[TipoUsuario]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[TipoUsuario](
	[idTipoUsuario] [int] NOT NULL,
	[TipoUsuario] [varchar](45) NULL,
PRIMARY KEY CLUSTERED 
(
	[idTipoUsuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Usuarios]    Script Date: 16/02/2020 17:49:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Usuarios](
	[idUsuario] [int] NOT NULL,
	[contrasenia] [varchar](45) NULL,
	[TipoUsuario_idTipoUsuario] [int] NOT NULL,
	[estado] [varchar](1) NULL,
PRIMARY KEY CLUSTERED 
(
	[idUsuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[categoria] ([idcategoria], [descripcion]) VALUES (1, N'Espumilla Pequeña')
INSERT [dbo].[categoria] ([idcategoria], [descripcion]) VALUES (2, N'Espumilla Grande')
INSERT [dbo].[categoria] ([idcategoria], [descripcion]) VALUES (3, N'Bolillos')
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'127035240765', N'Bandeja de Espumillitas', 25, 1)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'700000000016', N'Bandeja de Espumilla 12 unds', 15.33, 2)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'7000000000164', N'Bolsas de Bolillos', 33, 3)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'70599438', N'Bolsas de Pan para Torreja', 32, 3)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'9818011', N'Bandeja de Espumilla 12 unds', 15, 2)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'9831052', N'Bandeja de Espumillita', 25, 1)
ALTER TABLE [dbo].[Devoluciones]  WITH CHECK ADD  CONSTRAINT [fk_Devoluciones_Pedidos1] FOREIGN KEY([Pedidos_idPedidos])
REFERENCES [dbo].[Pedidos] ([idPedidos])
GO
ALTER TABLE [dbo].[Devoluciones] CHECK CONSTRAINT [fk_Devoluciones_Pedidos1]
GO
ALTER TABLE [dbo].[Empleados]  WITH CHECK ADD  CONSTRAINT [fk_Empleados_Personas1] FOREIGN KEY([Personas_idPersonas])
REFERENCES [dbo].[Personas] ([idPersonas])
GO
ALTER TABLE [dbo].[Empleados] CHECK CONSTRAINT [fk_Empleados_Personas1]
GO
ALTER TABLE [dbo].[Empleados]  WITH CHECK ADD  CONSTRAINT [fk_Empleados_Usuarios1] FOREIGN KEY([Usuarios_idUsuario])
REFERENCES [dbo].[Usuarios] ([idUsuario])
GO
ALTER TABLE [dbo].[Empleados] CHECK CONSTRAINT [fk_Empleados_Usuarios1]
GO
ALTER TABLE [dbo].[Inventario_Insumos]  WITH CHECK ADD  CONSTRAINT [fk_Inventario_Insumos_Insumos1] FOREIGN KEY([Insumos_idInsumos])
REFERENCES [dbo].[Insumos] ([idInsumos])
GO
ALTER TABLE [dbo].[Inventario_Insumos] CHECK CONSTRAINT [fk_Inventario_Insumos_Insumos1]
GO
ALTER TABLE [dbo].[inventario_Producto]  WITH CHECK ADD  CONSTRAINT [fk_inventario_Producto_Productos1] FOREIGN KEY([Productos_idProductos])
REFERENCES [dbo].[Productos] ([idProductos])
GO
ALTER TABLE [dbo].[inventario_Producto] CHECK CONSTRAINT [fk_inventario_Producto_Productos1]
GO
ALTER TABLE [dbo].[Municipio]  WITH CHECK ADD  CONSTRAINT [fk_Municipio_Departamento1] FOREIGN KEY([Departamento_idDepartamento])
REFERENCES [dbo].[Departamento] ([idDepartamento])
GO
ALTER TABLE [dbo].[Municipio] CHECK CONSTRAINT [fk_Municipio_Departamento1]
GO
ALTER TABLE [dbo].[Pedidos]  WITH CHECK ADD  CONSTRAINT [fk_Pedidos_Empleados1] FOREIGN KEY([Empleados_idEmpleados])
REFERENCES [dbo].[Empleados] ([idEmpleados])
GO
ALTER TABLE [dbo].[Pedidos] CHECK CONSTRAINT [fk_Pedidos_Empleados1]
GO
ALTER TABLE [dbo].[Pedidos]  WITH CHECK ADD  CONSTRAINT [fk_Pedidos_Sucursal1] FOREIGN KEY([Sucursal_idSucursal])
REFERENCES [dbo].[Sucursal] ([idSucursal])
GO
ALTER TABLE [dbo].[Pedidos] CHECK CONSTRAINT [fk_Pedidos_Sucursal1]
GO
ALTER TABLE [dbo].[Pedidos_Productos]  WITH CHECK ADD  CONSTRAINT [fk_Pedidos_has_Productos_Pedidos1] FOREIGN KEY([Pedidos_idPedidos])
REFERENCES [dbo].[Pedidos] ([idPedidos])
GO
ALTER TABLE [dbo].[Pedidos_Productos] CHECK CONSTRAINT [fk_Pedidos_has_Productos_Pedidos1]
GO
ALTER TABLE [dbo].[Pedidos_Productos]  WITH CHECK ADD  CONSTRAINT [fk_Pedidos_has_Productos_Productos1] FOREIGN KEY([Productos_idProductos])
REFERENCES [dbo].[Productos] ([idProductos])
GO
ALTER TABLE [dbo].[Pedidos_Productos] CHECK CONSTRAINT [fk_Pedidos_has_Productos_Productos1]
GO
ALTER TABLE [dbo].[productoDefectuoso]  WITH CHECK ADD  CONSTRAINT [fk_productoDefectuoso_Productos1] FOREIGN KEY([Productos_idProductos])
REFERENCES [dbo].[Productos] ([idProductos])
GO
ALTER TABLE [dbo].[productoDefectuoso] CHECK CONSTRAINT [fk_productoDefectuoso_Productos1]
GO
ALTER TABLE [dbo].[Productos]  WITH CHECK ADD  CONSTRAINT [fk_Productos_categoria1] FOREIGN KEY([categoria_idcategoria])
REFERENCES [dbo].[categoria] ([idcategoria])
GO
ALTER TABLE [dbo].[Productos] CHECK CONSTRAINT [fk_Productos_categoria1]
GO
ALTER TABLE [dbo].[Productos_has_Insumos]  WITH CHECK ADD  CONSTRAINT [fk_Productos_has_Insumos_Insumos1] FOREIGN KEY([Insumos_idInsumos])
REFERENCES [dbo].[Insumos] ([idInsumos])
GO
ALTER TABLE [dbo].[Productos_has_Insumos] CHECK CONSTRAINT [fk_Productos_has_Insumos_Insumos1]
GO
ALTER TABLE [dbo].[Productos_has_Insumos]  WITH CHECK ADD  CONSTRAINT [fk_Productos_has_Insumos_Productos1] FOREIGN KEY([Productos_idProductos])
REFERENCES [dbo].[Productos] ([idProductos])
GO
ALTER TABLE [dbo].[Productos_has_Insumos] CHECK CONSTRAINT [fk_Productos_has_Insumos_Productos1]
GO
ALTER TABLE [dbo].[Sucursal]  WITH CHECK ADD  CONSTRAINT [fk_Sucursal_Empresa1] FOREIGN KEY([Empresa_idEmpresa])
REFERENCES [dbo].[Empresa] ([idEmpresa])
GO
ALTER TABLE [dbo].[Sucursal] CHECK CONSTRAINT [fk_Sucursal_Empresa1]
GO
ALTER TABLE [dbo].[Sucursal]  WITH CHECK ADD  CONSTRAINT [fk_Sucursal_Municipio1] FOREIGN KEY([Municipio_idMunicipio])
REFERENCES [dbo].[Municipio] ([idMunicipio])
GO
ALTER TABLE [dbo].[Sucursal] CHECK CONSTRAINT [fk_Sucursal_Municipio1]
GO
ALTER TABLE [dbo].[Sucursal]  WITH CHECK ADD  CONSTRAINT [fk_Sucursal_Personas1] FOREIGN KEY([Gerente])
REFERENCES [dbo].[Personas] ([idPersonas])
GO
ALTER TABLE [dbo].[Sucursal] CHECK CONSTRAINT [fk_Sucursal_Personas1]
GO
ALTER TABLE [dbo].[Usuarios]  WITH CHECK ADD  CONSTRAINT [fk_Usuarios_TipoUsuario1] FOREIGN KEY([TipoUsuario_idTipoUsuario])
REFERENCES [dbo].[TipoUsuario] ([idTipoUsuario])
GO
ALTER TABLE [dbo].[Usuarios] CHECK CONSTRAINT [fk_Usuarios_TipoUsuario1]
GO
USE [master]
GO
ALTER DATABASE [BD] SET  READ_WRITE 
GO

USE [master]
GO
/****** Object:  Database [Espumillas]    Script Date: 16/03/2020 20:58:16 ******/
CREATE DATABASE [Espumillas]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'BD', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\BD.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'BD_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\BD_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [Espumillas] SET COMPATIBILITY_LEVEL = 140
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [Espumillas].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [Espumillas] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [Espumillas] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [Espumillas] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [Espumillas] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [Espumillas] SET ARITHABORT OFF 
GO
ALTER DATABASE [Espumillas] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [Espumillas] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [Espumillas] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [Espumillas] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [Espumillas] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [Espumillas] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [Espumillas] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [Espumillas] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [Espumillas] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [Espumillas] SET  DISABLE_BROKER 
GO
ALTER DATABASE [Espumillas] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [Espumillas] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [Espumillas] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [Espumillas] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [Espumillas] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [Espumillas] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [Espumillas] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [Espumillas] SET RECOVERY FULL 
GO
ALTER DATABASE [Espumillas] SET  MULTI_USER 
GO
ALTER DATABASE [Espumillas] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [Espumillas] SET DB_CHAINING OFF 
GO
ALTER DATABASE [Espumillas] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [Espumillas] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [Espumillas] SET DELAYED_DURABILITY = DISABLED 
GO
EXEC sys.sp_db_vardecimal_storage_format N'Espumillas', N'ON'
GO
ALTER DATABASE [Espumillas] SET QUERY_STORE = OFF
GO
USE [Espumillas]
GO
/****** Object:  Table [dbo].[categoria]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Departamento]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Devoluciones]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Empleados]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Empresa]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Insumos]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Inventario_Insumos]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[inventario_Producto]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Municipio]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Pedidos]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Pedidos_Productos]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Persona]    Script Date: 16/03/2020 20:58:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Persona](
	[idPersona] [int] NOT NULL,
	[nombre] [varchar](45) NULL,
	[apellido] [varchar](45) NULL,
	[nidentidad] [varchar](45) NULL,
	[correo] [varchar](45) NULL,
	[direccion] [varchar](45) NULL,
	[telefono] [varchar](45) NULL,
	[genero] [varchar](45) NULL,
PRIMARY KEY CLUSTERED 
(
	[idPersona] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[productoDefectuoso]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Productos]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Productos_has_Insumos]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[Sucursal]    Script Date: 16/03/2020 20:58:17 ******/
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
/****** Object:  Table [dbo].[TipoUsuario]    Script Date: 16/03/2020 20:58:18 ******/
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
/****** Object:  Table [dbo].[Usuarios]    Script Date: 16/03/2020 20:58:18 ******/
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
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (1, N'Tegucigalpa')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (2, N'Cortes')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (3, N'Altlantida')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (4, N'Colon')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (5, N'Comayagua')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (6, N'Copan')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (7, N'Islas')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (8, N'Gracias_Dios')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (9, N'Lempira')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (10, N'Valle')
INSERT [dbo].[Departamento] ([idDepartamento], [nombreDepartamento]) VALUES (11, N'Paraizo')
INSERT [dbo].[Devoluciones] ([idDevoluciones], [cantidad], [fechaDevolucion], [estado], [Pedidos_idPedidos]) VALUES (1, N'30', CAST(N'2020-03-05' AS Date), N'pendiente', 1)
INSERT [dbo].[Empleados] ([idEmpleados], [cargo], [Personas_idPersonas], [Usuarios_idUsuario]) VALUES (1, N'administrador', 1, 1)
INSERT [dbo].[Empleados] ([idEmpleados], [cargo], [Personas_idPersonas], [Usuarios_idUsuario]) VALUES (2, N'repartidor', 2, 2)
INSERT [dbo].[Empleados] ([idEmpleados], [cargo], [Personas_idPersonas], [Usuarios_idUsuario]) VALUES (3, N'repartidor', 3, 3)
INSERT [dbo].[Empresa] ([idEmpresa], [nombreEmpresa], [RTN], [direccionPrincipal]) VALUES (1, N'Walmart', N'08019999176681', N'Blv_Centroamerica_EdificioIPM')
INSERT [dbo].[Empresa] ([idEmpresa], [nombreEmpresa], [RTN], [direccionPrincipal]) VALUES (2, N'La_Colonia', N'08019995224132', N'Colonia_Alameda')
INSERT [dbo].[Insumos] ([idInsumos], [nombreInsumo], [precio], [proveedor]) VALUES (1, N'Saco de Azucar', 923, N'Central de Ingenios')
INSERT [dbo].[Insumos] ([idInsumos], [nombreInsumo], [precio], [proveedor]) VALUES (2, N'Clara', 12, N'Gustavo Turcios')
INSERT [dbo].[Insumos] ([idInsumos], [nombreInsumo], [precio], [proveedor]) VALUES (3, N'Gas', 1550, N'Servigas')
INSERT [dbo].[Insumos] ([idInsumos], [nombreInsumo], [precio], [proveedor]) VALUES (4, N'Colorante Alimenticio', 300, N'Casa de la Azucar')
INSERT [dbo].[Insumos] ([idInsumos], [nombreInsumo], [precio], [proveedor]) VALUES (5, N'Manteca', 540, N'Bodega MARDEL')
INSERT [dbo].[Insumos] ([idInsumos], [nombreInsumo], [precio], [proveedor]) VALUES (6, N'Harina', 760, N'Molino Arinero Sula')
INSERT [dbo].[Inventario_Insumos] ([idInventario_Insumos], [cantidad], [fechaLlegada], [Insumos_idInsumos]) VALUES (1, 20, CAST(N'2020-03-14' AS Date), 2)
INSERT [dbo].[Inventario_Insumos] ([idInventario_Insumos], [cantidad], [fechaLlegada], [Insumos_idInsumos]) VALUES (2, 100, CAST(N'2020-03-14' AS Date), 1)
INSERT [dbo].[Inventario_Insumos] ([idInventario_Insumos], [cantidad], [fechaLlegada], [Insumos_idInsumos]) VALUES (3, 5, CAST(N'2020-03-14' AS Date), 4)
INSERT [dbo].[Inventario_Insumos] ([idInventario_Insumos], [cantidad], [fechaLlegada], [Insumos_idInsumos]) VALUES (4, 10, CAST(N'2020-03-14' AS Date), 5)
INSERT [dbo].[Inventario_Insumos] ([idInventario_Insumos], [cantidad], [fechaLlegada], [Insumos_idInsumos]) VALUES (5, 50, CAST(N'2020-03-14' AS Date), 6)
INSERT [dbo].[inventario_Producto] ([idinventario_Producto], [cantidadBandejas], [fechaElaboracion], [fechaVencimiento], [Productos_idProductos]) VALUES (1, N'50', CAST(N'2020-03-14' AS Date), CAST(N'2020-05-31' AS Date), N'127035240765')
INSERT [dbo].[inventario_Producto] ([idinventario_Producto], [cantidadBandejas], [fechaElaboracion], [fechaVencimiento], [Productos_idProductos]) VALUES (2, N'50', CAST(N'2020-03-14' AS Date), CAST(N'2020-05-31' AS Date), N'700000000016')
INSERT [dbo].[inventario_Producto] ([idinventario_Producto], [cantidadBandejas], [fechaElaboracion], [fechaVencimiento], [Productos_idProductos]) VALUES (3, N'50', CAST(N'2020-03-14' AS Date), CAST(N'2020-05-31' AS Date), N'9818011')
INSERT [dbo].[inventario_Producto] ([idinventario_Producto], [cantidadBandejas], [fechaElaboracion], [fechaVencimiento], [Productos_idProductos]) VALUES (4, N'50', CAST(N'2020-03-14' AS Date), CAST(N'2020-05-31' AS Date), N'9831052')
INSERT [dbo].[inventario_Producto] ([idinventario_Producto], [cantidadBandejas], [fechaElaboracion], [fechaVencimiento], [Productos_idProductos]) VALUES (5, N'50', CAST(N'2020-03-14' AS Date), CAST(N'2020-03-31' AS Date), N'70599438')
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (101, N'Comayaguela', 1)
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (102, N'Santa_Lucia', 1)
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (104, N'Ceiba', 3)
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (105, N'San_Pedro_Sula', 2)
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (106, N'Distrito_Central', 1)
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (107, N'Santa_Ana', 1)
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (108, N'Omoa', 2)
INSERT [dbo].[Municipio] ([idMunicipio], [nombreMunicipio], [Departamento_idDepartamento]) VALUES (109, N'Arizona', 3)
INSERT [dbo].[Pedidos] ([idPedidos], [fechaRegistro], [fechaLimite], [estado], [TotalPagar], [Empleados_idEmpleados], [Sucursal_idSucursal]) VALUES (1, CAST(N'2020-03-02' AS Date), CAST(N'2020-03-10' AS Date), N'pendiente', 2000, 2, 1)
INSERT [dbo].[Pedidos] ([idPedidos], [fechaRegistro], [fechaLimite], [estado], [TotalPagar], [Empleados_idEmpleados], [Sucursal_idSucursal]) VALUES (2, CAST(N'2020-02-25' AS Date), CAST(N'2020-03-01' AS Date), N'pendiente', 2000, 2, 1)
INSERT [dbo].[Pedidos] ([idPedidos], [fechaRegistro], [fechaLimite], [estado], [TotalPagar], [Empleados_idEmpleados], [Sucursal_idSucursal]) VALUES (3, CAST(N'2020-03-15' AS Date), CAST(N'2020-03-30' AS Date), N'pendiente', 2000, 3, 2)
INSERT [dbo].[Pedidos_Productos] ([Pedidos_idPedidos], [Productos_idProductos], [cantidad], [subtotal]) VALUES (1, N'127035240765', 100, 2000)
INSERT [dbo].[Pedidos_Productos] ([Pedidos_idPedidos], [Productos_idProductos], [cantidad], [subtotal]) VALUES (1, N'700000000016', 30, 500)
INSERT [dbo].[Pedidos_Productos] ([Pedidos_idPedidos], [Productos_idProductos], [cantidad], [subtotal]) VALUES (2, N'700000000016', 100, 153.3)
INSERT [dbo].[Pedidos_Productos] ([Pedidos_idPedidos], [Productos_idProductos], [cantidad], [subtotal]) VALUES (3, N'700000000016', 200, 3066)
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (1, N'Paulo', N'Londra', N'08001-1995-09876', N'pauloandre_95@hotmail.com', N'Col.Kennedy', N'991934-45', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (2, N'Mario', N'Barahona', N'-762', N'Marioan_97@gmail.com', N'Col.Miraflores', N'998904-95', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (3, N'Mario', N'Lopez', N'-762', N'Marian_976@gmail.com', N'Col.Miraflores', N'997977-95', N'f')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (4, N'Samanta', N'Martinez', N'-33892', N'Saman_97@gmail.com', N'Col.Navio', N'961964-85', N'f')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (5, N'Fernando', N'Mendez', N'-281587', N'Fernda_94@gmail.com', N'Col.Llanos', N'991934-45', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (6, N'Nolan', N'Martinez', N'-70535', N'Nsaid_93@gmail.com', N'Col.Jose', N'901934-05', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (7, N'German', N'Guevara', N'1617', N'German_98@gmail.com', N'Col.Aleman', N'971984-55', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (8, N'Sabrina', N'Barahona', N'-2413', N'Marie_93@gmail.com', N'Col.Jacaleapa', N'891984-15', N'f')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (9, N'Maria', N'Cardona', N'-2757', N'mjHer_95@gmail.com', N'Col.SanMiguel', N'871934-25', N'f')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (10, N'Carlos', N'Franco', N'-3860', N'Carlosr_95@gmail.com', N'Col.Pedregal', N'819934-35', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (11, N'Francis', N'Ramos', N'-2783', N'Rubygo_94@gmail.com', N'Col.Vega', N'959340-15', N'f')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (12, N'Oscar', N'Reyes', N'1176', N'Oscaro_92@gmail.com', N'Col.America', N'941734-05', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (13, N'Bryan', N'Alvarez', N'-2645', N'Leoro_93@gmail.com', N'Col.San Angel', N'973934-75', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (14, N'Luis', N'Nu?ez', N'-2711', N'luisf_91@gmail.com', N'Col.San Francisco', N'987934-05', N'm')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (15, N'Heidy', N'Erazo', N'909', N'Hmabel_94@gmail.com', N'Col.Chimbo', N'964934-89', N'f')
INSERT [dbo].[Persona] ([idPersona], [nombre], [apellido], [nidentidad], [correo], [direccion], [telefono], [genero]) VALUES (16, N'Angel', N'Guzman', N'-3868', N'Angeld_93@gmail.com', N'Col.Suyapa', N'990904-45', N'm')
INSERT [dbo].[productoDefectuoso] ([idproductoDefectuoso], [cantidad], [fecha], [Productos_idProductos]) VALUES (1, 25, CAST(N'2020-03-14' AS Date), N'127035240765')
INSERT [dbo].[productoDefectuoso] ([idproductoDefectuoso], [cantidad], [fecha], [Productos_idProductos]) VALUES (2, 25, CAST(N'2020-03-14' AS Date), N'700000000016')
INSERT [dbo].[productoDefectuoso] ([idproductoDefectuoso], [cantidad], [fecha], [Productos_idProductos]) VALUES (3, 25, CAST(N'2020-03-14' AS Date), N'9818011')
INSERT [dbo].[productoDefectuoso] ([idproductoDefectuoso], [cantidad], [fecha], [Productos_idProductos]) VALUES (4, 25, CAST(N'2020-03-14' AS Date), N'9831052')
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'127035240765', N'Bandeja de Espumillitas', 25, 1)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'700000000016', N'Bandeja de Espumilla 12 unds', 15.33, 2)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'7000000000164', N'Bolsas de Bolillos', 33, 3)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'70599438', N'Bolsas de Pan para Torreja', 32, 3)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'9818011', N'Bandeja de Espumilla 12 unds', 15, 2)
INSERT [dbo].[Productos] ([idProductos], [nombre], [precioVenta], [categoria_idcategoria]) VALUES (N'9831052', N'Bandeja de Espumillita', 25, 1)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'127035240765', 1)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'127035240765', 2)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'700000000016', 1)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'700000000016', 2)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'7000000000164', 1)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'70599438', 1)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'9818011', 1)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'9818011', 2)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'9831052', 1)
INSERT [dbo].[Productos_has_Insumos] ([Productos_idProductos], [Insumos_idInsumos]) VALUES (N'9831052', 2)
INSERT [dbo].[Sucursal] ([idSucursal], [nombreTienda], [telefonoTienda], [Empresa_idEmpresa], [Municipio_idMunicipio], [Gerente]) VALUES (1, N'La_Colonia_N_2', N'504_22034567', 2, 101, 1)
INSERT [dbo].[Sucursal] ([idSucursal], [nombreTienda], [telefonoTienda], [Empresa_idEmpresa], [Municipio_idMunicipio], [Gerente]) VALUES (2, N'La_Colonia_N_10', N'504_22231497', 2, 106, 2)
INSERT [dbo].[Sucursal] ([idSucursal], [nombreTienda], [telefonoTienda], [Empresa_idEmpresa], [Municipio_idMunicipio], [Gerente]) VALUES (3, N'Walmart_Cascadas_mall', N'504_97864532', 1, 106, 3)
INSERT [dbo].[Sucursal] ([idSucursal], [nombreTienda], [telefonoTienda], [Empresa_idEmpresa], [Municipio_idMunicipio], [Gerente]) VALUES (4, N'Walmart_Anillo_Periferico', N'504_23034567', 1, 108, 4)
INSERT [dbo].[Sucursal] ([idSucursal], [nombreTienda], [telefonoTienda], [Empresa_idEmpresa], [Municipio_idMunicipio], [Gerente]) VALUES (5, N'La_Colonia_N_7', N'504_98909090', 2, 104, 5)
INSERT [dbo].[Sucursal] ([idSucursal], [nombreTienda], [telefonoTienda], [Empresa_idEmpresa], [Municipio_idMunicipio], [Gerente]) VALUES (6, N'La_Colonia_N_2', N'504_24503456', 2, 101, 6)
INSERT [dbo].[Sucursal] ([idSucursal], [nombreTienda], [telefonoTienda], [Empresa_idEmpresa], [Municipio_idMunicipio], [Gerente]) VALUES (7, N'La_Colonia_N_2', N'504_22350347', 2, 109, 9)
INSERT [dbo].[TipoUsuario] ([idTipoUsuario], [TipoUsuario]) VALUES (1, N'Administrador')
INSERT [dbo].[TipoUsuario] ([idTipoUsuario], [TipoUsuario]) VALUES (2, N'Empleado')
INSERT [dbo].[Usuarios] ([idUsuario], [contrasenia], [TipoUsuario_idTipoUsuario], [estado]) VALUES (1, N'asd.456', 2, N'a')
INSERT [dbo].[Usuarios] ([idUsuario], [contrasenia], [TipoUsuario_idTipoUsuario], [estado]) VALUES (2, N'asd.456', 1, N'a')
INSERT [dbo].[Usuarios] ([idUsuario], [contrasenia], [TipoUsuario_idTipoUsuario], [estado]) VALUES (3, N'asd.456', 2, N'a')
INSERT [dbo].[Usuarios] ([idUsuario], [contrasenia], [TipoUsuario_idTipoUsuario], [estado]) VALUES (4, N'asd.456', 2, N'i')
ALTER TABLE [dbo].[Devoluciones]  WITH CHECK ADD  CONSTRAINT [fk_Devoluciones_Pedidos1] FOREIGN KEY([Pedidos_idPedidos])
REFERENCES [dbo].[Pedidos] ([idPedidos])
GO
ALTER TABLE [dbo].[Devoluciones] CHECK CONSTRAINT [fk_Devoluciones_Pedidos1]
GO
ALTER TABLE [dbo].[Empleados]  WITH CHECK ADD  CONSTRAINT [fk_Empleados_Personas1] FOREIGN KEY([Personas_idPersonas])
REFERENCES [dbo].[Persona] ([idPersona])
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
REFERENCES [dbo].[Persona] ([idPersona])
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
ALTER DATABASE [Espumillas] SET  READ_WRITE 
GO

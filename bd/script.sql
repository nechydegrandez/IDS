--
-- Table Personas
-- -----------------------------------------------------
CREATE TABLE  Personas (
  idPersonas INT NOT NULL,
  nombre VARCHAR(45) NULL,
  apellido VARCHAR(45) NULL,
  nidentidad VARCHAR(45) NULL,
  correo VARCHAR(45) NULL,
  direccion VARCHAR(45) NULL,
  telefono VARCHAR(45) NULL,
  genero VARCHAR(45) NULL,
  PRIMARY KEY (idPersonas))
;


-- -----------------------------------------------------
-- Table TipoUsuario
-- -----------------------------------------------------
CREATE TABLE  TipoUsuario (
  idTipoUsuario INT NOT NULL,
  TipoUsuario VARCHAR(45) NULL,
  PRIMARY KEY (idTipoUsuario))
;


-- -----------------------------------------------------
-- Table Usuarios
-- -----------------------------------------------------
CREATE TABLE  Usuarios (
  idUsuario INT NOT NULL,
  contrasenia VARCHAR(45) NULL,
  TipoUsuario_idTipoUsuario INT NOT NULL,
  estado VARCHAR(1) NULL,
  PRIMARY KEY (idUsuario),
  
  CONSTRAINT fk_Usuarios_TipoUsuario1
    FOREIGN KEY (TipoUsuario_idTipoUsuario)
    REFERENCES TipoUsuario (idTipoUsuario)
    
    )
;


-- -----------------------------------------------------
-- Table Empleados
-- -----------------------------------------------------
CREATE TABLE  Empleados (
  idEmpleados INT NOT NULL,
  cargo VARCHAR(45) NULL,
  Personas_idPersonas INT NOT NULL,
  Usuarios_idUsuario INT NOT NULL,
  PRIMARY KEY (idEmpleados),

  CONSTRAINT fk_Empleados_Personas1
    FOREIGN KEY (Personas_idPersonas)
    REFERENCES Personas (idPersonas)
    
    ,
  CONSTRAINT fk_Empleados_Usuarios1
    FOREIGN KEY (Usuarios_idUsuario)
    REFERENCES Usuarios (idUsuario)
    
    )
;


-- -----------------------------------------------------
-- Table Empresa
-- -----------------------------------------------------
CREATE TABLE  Empresa (
  idEmpresa INT NOT NULL,
  nombreEmpresa VARCHAR(45) NULL,
  RTN VARCHAR(45) NULL,
  direccionPrincipal VARCHAR(45) NULL,
  PRIMARY KEY (idEmpresa))
;


-- -----------------------------------------------------
-- Table Departamento
-- -----------------------------------------------------
CREATE TABLE  Departamento (
  idDepartamento INT NOT NULL,
  nombreDepartamento VARCHAR(45) NULL,
  PRIMARY KEY (idDepartamento))
;


-- -----------------------------------------------------
-- Table Municipio
-- -----------------------------------------------------
CREATE TABLE  Municipio (
  idMunicipio INT NOT NULL,
  nombreMunicipio VARCHAR(45) NULL,
  Departamento_idDepartamento INT NOT NULL,
  PRIMARY KEY (idMunicipio),
 
  CONSTRAINT fk_Municipio_Departamento1
    FOREIGN KEY (Departamento_idDepartamento)
    REFERENCES Departamento (idDepartamento)
    
    )
;


-- -----------------------------------------------------
-- Table Sucursal
-- -----------------------------------------------------
CREATE TABLE  Sucursal (
  idSucursal INT NOT NULL,
  nombreTienda VARCHAR(45) NULL,
  telefonoTienda VARCHAR(45) NULL,
  Empresa_idEmpresa INT NOT NULL,
  Municipio_idMunicipio INT NOT NULL,
  Gerente INT NOT NULL,
  PRIMARY KEY (idSucursal),
 
  CONSTRAINT fk_Sucursal_Empresa1
    FOREIGN KEY (Empresa_idEmpresa)
    REFERENCES Empresa (idEmpresa)
    
    ,
  CONSTRAINT fk_Sucursal_Municipio1
    FOREIGN KEY (Municipio_idMunicipio)
    REFERENCES Municipio (idMunicipio)
    
    ,
  CONSTRAINT fk_Sucursal_Personas1
    FOREIGN KEY (Gerente)
    REFERENCES Personas (idPersonas)
    
    )
;


-- -----------------------------------------------------
-- Table Pedidos
-- -----------------------------------------------------
CREATE TABLE  Pedidos (
  idPedidos INT NOT NULL,
  fechaRegistro DATE NULL,
  fechaLimite DATE NULL,
  estado VARCHAR(45) NULL,
  TotalPagar float NULL,
  Empleados_idEmpleados INT NOT NULL,
  Sucursal_idSucursal INT NOT NULL,
  PRIMARY KEY (idPedidos),

  CONSTRAINT fk_Pedidos_Empleados1
    FOREIGN KEY (Empleados_idEmpleados)
    REFERENCES Empleados (idEmpleados)
    
    ,
  CONSTRAINT fk_Pedidos_Sucursal1
    FOREIGN KEY (Sucursal_idSucursal)
    REFERENCES Sucursal (idSucursal)
    
    )
;


-- -----------------------------------------------------
-- Table categoria
-- -----------------------------------------------------
CREATE TABLE  categoria (
  idcategoria INT NOT NULL,
  descripcion VARCHAR(45) NULL,
  PRIMARY KEY (idcategoria))
;


-- -----------------------------------------------------
-- Table Productos
-- -----------------------------------------------------
CREATE TABLE  Productos (
  idProductos INT NOT NULL,
  nombre VARCHAR(45) NULL,
  precioVenta float NULL,
  categoria_idcategoria INT NOT NULL,
  PRIMARY KEY (idProductos),

  CONSTRAINT fk_Productos_categoria1
    FOREIGN KEY (categoria_idcategoria)
    REFERENCES categoria (idcategoria)
    
    )
;


-- -----------------------------------------------------
-- Table Insumos
-- -----------------------------------------------------
CREATE TABLE  Insumos (
  idInsumos INT NOT NULL,
  nombreInsumo VARCHAR(45) NULL,
  precio float NULL,
  proveedor VARCHAR(45) NULL,
  PRIMARY KEY (idInsumos))
;


-- -----------------------------------------------------
-- Table Inventario_Insumos
-- -----------------------------------------------------
CREATE TABLE  Inventario_Insumos (
  idInventario_Insumos INT NOT NULL,
  cantidad INT NULL,
  fechaLlegada DATE NULL,
  Insumos_idInsumos INT NOT NULL,
  PRIMARY KEY (idInventario_Insumos),

  CONSTRAINT fk_Inventario_Insumos_Insumos1
    FOREIGN KEY (Insumos_idInsumos)
    REFERENCES Insumos (idInsumos)
    
    )
;


-- -----------------------------------------------------
-- Table Devoluciones
-- -----------------------------------------------------
CREATE TABLE  Devoluciones (
  idDevoluciones INT NOT NULL,
  cantidad VARCHAR(45) NULL,
  fechaDevolucion DATE NULL,
  estado VARCHAR(45) NULL,
  Pedidos_idPedidos INT NOT NULL,
  PRIMARY KEY (idDevoluciones),

  CONSTRAINT fk_Devoluciones_Pedidos1
    FOREIGN KEY (Pedidos_idPedidos)
    REFERENCES Pedidos (idPedidos)
    
    )
;


-- -----------------------------------------------------
-- Table inventario_Producto
-- -----------------------------------------------------
CREATE TABLE  inventario_Producto (
  idinventario_Producto INT NOT NULL,
  cantidadBandejas VARCHAR(45) NULL,
  fechaElaboracion DATE NULL,
  fechaVencimiento DATE NULL,
  Productos_idProductos INT NOT NULL,
  PRIMARY KEY (idinventario_Producto),

  CONSTRAINT fk_inventario_Producto_Productos1
    FOREIGN KEY (Productos_idProductos)
    REFERENCES Productos (idProductos)
    
    )
;


-- -----------------------------------------------------
-- Table productoDefectuoso
-- -----------------------------------------------------
CREATE TABLE  productoDefectuoso (
  idproductoDefectuoso INT NOT NULL,
  cantidad INT NULL,
  fecha DATE NULL,
  Productos_idProductos INT NOT NULL,
  PRIMARY KEY (idproductoDefectuoso),

  CONSTRAINT fk_productoDefectuoso_Productos1
    FOREIGN KEY (Productos_idProductos)
    REFERENCES Productos (idProductos)
    
    )
;


-- -----------------------------------------------------
-- Table Pedidos_Productos
-- -----------------------------------------------------
CREATE TABLE  Pedidos_Productos (
  Pedidos_idPedidos INT NOT NULL,
  Productos_idProductos INT NOT NULL,
  cantidad INT NULL,
  subtotal float NULL,
  PRIMARY KEY (Pedidos_idPedidos, Productos_idProductos),
  
  CONSTRAINT fk_Pedidos_has_Productos_Pedidos1
    FOREIGN KEY (Pedidos_idPedidos)
    REFERENCES Pedidos (idPedidos)
    
    ,
  CONSTRAINT fk_Pedidos_has_Productos_Productos1
    FOREIGN KEY (Productos_idProductos)
    REFERENCES Productos (idProductos)
    
    )
;


-- -----------------------------------------------------
-- Table Productos_has_Insumos
-- -----------------------------------------------------
CREATE TABLE  Productos_has_Insumos (
  Productos_idProductos INT NOT NULL,
  Insumos_idInsumos INT NOT NULL,
  PRIMARY KEY (Productos_idProductos, Insumos_idInsumos),
  
  CONSTRAINT fk_Productos_has_Insumos_Productos1
    FOREIGN KEY (Productos_idProductos)
    REFERENCES Productos (idProductos)
    
    ,
  CONSTRAINT fk_Productos_has_Insumos_Insumos1
    FOREIGN KEY (Insumos_idInsumos)
    REFERENCES Insumos (idInsumos)
    
    )
;

<?php

	class productoDefectuoso{

		private $idProductoDefectuoso;
		private $cantidad;
		private $fechaRegistrado;
		private $Productos_idProductos;

		public function __construct($idProductoDefectuoso,
					$cantidad,
					$fechaRegistrado,
					$Productos_idProductos){
			$this->idProductoDefectuoso = $idProductoDefectuoso;
			$this->cantidad = $cantidad;
			$this->fechaRegistrado = $fechaRegistrado;
			$this->Productos_idProductos = $Productos_idProductos;
		}
		public function getIdProductoDefectuoso(){
			return $this->idProductoDefectuoso;
		}
		public function setIdProductoDefectuoso($idProductoDefectuoso){
			$this->idProductoDefectuoso = $idProductoDefectuoso;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getFechaRegistrado(){
			return $this->fechaRegistrado;
		}
		public function setFechaRegistrado($fechaRegistrado){
			$this->fechaRegistrado = $fechaRegistrado;
		}
		public function getProductos_idProductos(){
			return $this->Productos_idProductos;
		}
		public function setProductos_idProductos($Productos_idProductos){
			$this->Productos_idProductos = $Productos_idProductos;
		}
		public function __toString(){
			return "IdProductoDefectuoso: " . $this->idProductoDefectuoso . 
				" Cantidad: " . $this->cantidad . 
				" FechaRegistrado: " . $this->fechaRegistrado . 
				" Productos_idProductos: " . $this->Productos_idProductos;
        }
        
        public function insertarProductoDefectuoso($conexion){
            $sql= sprintf("INSERT INTO productodefectuoso(cantidad, fechaRegistrado, Productos_idProductos) VALUES (%s,curdate(),%s)",
            $conexion->antiInyeccion($this->cantidad),
            $conexion->antiInyeccion($this->Productos_idProductos));
            $resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Producto dañado agregado exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido añadir el producto dañado";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
            
		}
		
		public function visualizarProductosDefectuosos($conexion){
			$sql = "SELECT 
			pd.idproductoDefectuoso, 
			pd.cantidad, 
			DATE_FORMAT(pd.fechaRegistrado, '%d-%m-%Y') as fechaRegistrado, 
			pd.Productos_idProductos,
			p.nombre,
			p.empresa,
			e.nombreEmpresa 
			FROM productodefectuoso as pd
			INNER JOIN productos as p
			ON pd.Productos_idProductos = p.idProductos
			INNER JOIN empresa as e
			ON p.empresa = e.idEmpresa";

            $resultado = $conexion->ejecutarConsulta($sql);
			$listaInventarioProductosDefectuosos = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaInventarioProductosDefectuosos[] = $fila;
			}

			return json_encode($listaInventarioProductosDefectuosos);
		}
	}
?>
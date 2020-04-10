<?php

	class productos{

		private $idProductos;
		private $nombre;
		private $precioVenta;
		private $empresa;

		public function __construct($idProductos,
					$nombre,
					$precioVenta,
					$empresa){
			$this->idProductos = $idProductos;
			$this->nombre = $nombre;
			$this->precioVenta = $precioVenta;
			$this->empresa = $empresa;
		}
		public function getIdProductos(){
			return $this->idProductos;
		}
		public function setIdProductos($idProductos){
			$this->idProductos = $idProductos;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getPrecioVenta(){
			return $this->precioVenta;
		}
		public function setPrecioVenta($precioVenta){
			$this->precioVenta = $precioVenta;
		}
		public function getEmpresa(){
			return $this->empresa;
		}
		public function setEmpresa($empresa){
			$this->empresa = $empresa;
		}
		public function __toString(){
			return "IdProductos: " . $this->idProductos . 
				" Nombre: " . $this->nombre . 
				" PrecioVenta: " . $this->precioVenta . 
				" Empresa: " . $this->empresa;
		}

		public function visualizarProductos($conexion){

			$sql="SELECT 
			p.idProductos,
			p.nombre,
			p.precioVenta,
			p.empresa,
			e.nombreEmpresa 
			FROM productos as p
			INNER JOIN empresa as e
			on p.empresa = e.idEmpresa";

			$resultado = $conexion->ejecutarConsulta($sql);
			$listaProductos = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaProductos[] = $fila;
			}

			return json_encode($listaProductos);


		}
	}
?>
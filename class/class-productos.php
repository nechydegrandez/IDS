<?php

	class productos{

		private $idProductos;
		private $nombre;
		private $precioVenta;
		private $categoria_idcategoria;

		public function __construct($idProductos,
					$nombre,
					$precioVenta,
					$categoria_idcategoria){
			$this->idProductos = $idProductos;
			$this->nombre = $nombre;
			$this->precioVenta = $precioVenta;
			$this->categoria_idcategoria = $categoria_idcategoria;
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
		public function getCategoria_idcategoria(){
			return $this->categoria_idcategoria;
		}
		public function setCategoria_idcategoria($categoria_idcategoria){
			$this->categoria_idcategoria = $categoria_idcategoria;
		}
		public function __toString(){
			return "IdProductos: " . $this->idProductos . 
				" Nombre: " . $this->nombre . 
				" PrecioVenta: " . $this->precioVenta . 
				" Categoria_idcategoria: " . $this->categoria_idcategoria;
		}
	}
?>
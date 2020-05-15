<?php

	class DetalleFactura{

		private $idDetalle_factura;
		private $cantidad;
		private $facturas_idfacturas;
		private $productos_idProductos;

		public function __construct($idDetalle_factura,
					$cantidad,
					$facturas_idfacturas,
					$productos_idProductos){
			$this->idDetalle_factura = $idDetalle_factura;
			$this->cantidad = $cantidad;
			$this->facturas_idfacturas = $facturas_idfacturas;
			$this->productos_idProductos = $productos_idProductos;
		}
		public function getIdDetalle_factura(){
			return $this->idDetalle_factura;
		}
		public function setIdDetalle_factura($idDetalle_factura){
			$this->idDetalle_factura = $idDetalle_factura;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getFacturas_idfacturas(){
			return $this->facturas_idfacturas;
		}
		public function setFacturas_idfacturas($facturas_idfacturas){
			$this->facturas_idfacturas = $facturas_idfacturas;
		}
		public function getProductos_idProductos(){
			return $this->productos_idProductos;
		}
		public function setProductos_idProductos($productos_idProductos){
			$this->productos_idProductos = $productos_idProductos;
		}
		public function __toString(){
			return "IdDetalle_factura: " . $this->idDetalle_factura . 
				" Cantidad: " . $this->cantidad . 
				" Facturas_idfacturas: " . $this->facturas_idfacturas . 
				" Productos_idProductos: " . $this->productos_idProductos;
		}

		public function detalleFacturaEspecifica($conexion){
			
		}
	}
?>
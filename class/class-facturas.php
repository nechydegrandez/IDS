<?php

	class Facturas{

		private $idfacturas;
		private $fecha_factura;
		private $empresa_idEmpresa;
		private $sucursal_idSucursal;

		public function __construct($idfacturas,
					$fecha_factura,
					$empresa_idEmpresa,
					$sucursal_idSucursal){
			$this->idfacturas = $idfacturas;
			$this->fecha_factura = $fecha_factura;
			$this->empresa_idEmpresa = $empresa_idEmpresa;
			$this->sucursal_idSucursal = $sucursal_idSucursal;
		}
		public function getIdfacturas(){
			return $this->idfacturas;
		}
		public function setIdfacturas($idfacturas){
			$this->idfacturas = $idfacturas;
		}
		public function getFecha_factura(){
			return $this->fecha_factura;
		}
		public function setFecha_factura($fecha_factura){
			$this->fecha_factura = $fecha_factura;
		}
		public function getEmpresa_idEmpresa(){
			return $this->empresa_idEmpresa;
		}
		public function setEmpresa_idEmpresa($empresa_idEmpresa){
			$this->empresa_idEmpresa = $empresa_idEmpresa;
		}
		public function getSucursal_idSucursal(){
			return $this->sucursal_idSucursal;
		}
		public function setSucursal_idSucursal($sucursal_idSucursal){
			$this->sucursal_idSucursal = $sucursal_idSucursal;
		}
		public function __toString(){
			return "Idfacturas: " . $this->idfacturas . 
				" Fecha_factura: " . $this->fecha_factura . 
				" Empresa_idEmpresa: " . $this->empresa_idEmpresa . 
				" Sucursal_idSucursal: " . $this->sucursal_idSucursal;
		}

		public function verListaFacturas($conexion){
			$sql = "SELECT 
			f.idfacturas, 
			f.fecha_factura, 
			f.sucursal_idSucursal,
			s.nombreTienda 
			FROM facturas as f
			INNER JOIN sucursal as s
			ON f.sucursal_idsucursal = s.idSucursal";

			$resultado = $conexion->ejecutarConsulta($sql);
			$listaFacturas = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaFacturas[] = $fila;
			}

			$final = json_encode($listaFacturas);

			return $final;
		}

		public function verFacturaEspecifica($conexion){
			$sql = sprintf("SELECT 
			f.idfacturas, 
			f.fecha_factura,
			f.empresa_idEmpresa,
			e.nombreEmpresa,
			s.nombreTienda 
			FROM facturas as f
			INNER JOIN sucursal as s
			ON f.sucursal_idsucursal = s.idSucursal
			INNER JOIN empresa as e
			ON f.empresa_idEmpresa = e.idEmpresa
			WHERE f.idfacturas = %s",
			$conexion->antiInyeccion($this->idfacturas));

			$resultado = $conexion->ejecutarConsulta($sql);
			$facturas = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$facturas[] = $fila;
			}

			$final = json_encode($facturas);

			return $final;
		}
	}
?>
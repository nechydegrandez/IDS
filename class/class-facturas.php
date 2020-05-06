<?php

	class Facturas{

		private $idFactura;
		private $empresa;
		private $fechaImpresion;
		private $sucursal;

		public function __construct($idFactura,
					$empresa,
					$fechaImpresion,
					$sucursal){
			$this->idFactura = $idFactura;
			$this->empresa = $empresa;
			$this->fechaImpresion = $fechaImpresion;
			$this->sucursal = $sucursal;
		}
		public function getIdFactura(){
			return $this->idFactura;
		}
		public function setIdFactura($idFactura){
			$this->idFactura = $idFactura;
		}
		public function getEmpresa(){
			return $this->empresa;
		}
		public function setEmpresa($empresa){
			$this->empresa = $empresa;
		}
		public function getFechaImpresion(){
			return $this->fechaImpresion;
		}
		public function setFechaImpresion($fechaImpresion){
			$this->fechaImpresion = $fechaImpresion;
		}
		public function getSucursal(){
			return $this->sucursal;
		}
		public function setSucursal($sucursal){
			$this->sucursal = $sucursal;
		}
		public function __toString(){
			return "IdFactura: " . $this->idFactura . 
				" Empresa: " . $this->empresa . 
				" FechaImpresion: " . $this->fechaImpresion . 
				" Sucursal: " . $this->sucursal;
		}
	}
?>
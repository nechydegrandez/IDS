<?php

	class pedido{

		private $idPedidos;
		private $fechaRegistro;
		private $fechaLimite;
		private $estado;
		private $TotalPagar;
		private $idempleado;
		private $idsucursal;

		public function __construct(
			$idPedidos,
			$fechaRegistro,
			$fechaLimite,
			$estado,
			$TotalPagar,
			$idempleado,
			$idsucursal){
				$this->idPedidos= $idPedidos;
				$this->fechaRegistro= $fechaRegistro;
				$this->fechaLimite= $fechaLimite;
				$this->estado= $estado;
				$this->TotalPagar= $TotalPagar;
				$this->idempleado= $idempleado;
				$this->idsucursal= $idsucursal;
			}
			public function getidPedidos(){
				return $this->idPedidos;
			}
			public function setidPedidos($idPedidos){
				$this->idPedidos = $idPedidos;
			}
			public function getfechaRegistro(){
				return $this->fechaRegistro;
			}
			public function setfechaRegistro($fechaRegistro){
				$this->fechaRegistro = $fechaRegistro;
			}
			public function getfechaLimite(){
				return $this->fechaLimite;
			}
			public function setfechaLimite($fechaLimite){
				$this->fechaLimite = $fechaLimite;
			}
			public function getestado(){
				return $this->estado;
			}
			public function setestado($estado){
				$this->estado = $estado;
			}
			public function getTotalPagar(){
				return $this->TotalPagar;
			}
			public function setTotalPagar($TotalPagar){
				$this->TotalPagar = $TotalPagar;
			}
			public function getidempleado(){
				return $this->idempleado;
			}
			public function setidempleado($idempleado){
				$this->idempleado = $idempleado;
			}
			public function getidsucursal(){
				return $this->idsucursal;
			}
			public function setidsucursal($idsucursal){
				$this->idsucursal = $idsucursal;
			}
			public function toString(){
				return "idPedidos: " . $this->idPedidos . 
					" fechaRegistro: " . $this->fechaRegistro . 
					" fechaLimite: " . $this->fechaLimite . 
					" estado: " . $this->estado . 
					" TotalPagar: " . $this->TotalPagar . 
					" idempleado: " . $this->idempleado . 
					" idsucursal: " . $this->idsucursal ;
			}
	
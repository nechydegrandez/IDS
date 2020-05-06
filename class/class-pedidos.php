<?php

	class pedidos{

		private $idPedidos;
		private $fechaPedido;
		private $fechaLimite;
		private $totalPedido;
		private $Sucursal_idSucursal;

		public function __construct($idPedidos,
					$fechaPedido,
					$fechaLimite,
					$totalPedido,
					$Sucursal_idSucursal){
			$this->idPedidos = $idPedidos;
			$this->fechaPedido = $fechaPedido;
			$this->fechaLimite = $fechaLimite;
			$this->totalPedido = $totalPedido;
			$this->Sucursal_idSucursal = $Sucursal_idSucursal;
		}
		public function getIdPedidos(){
			return $this->idPedidos;
		}
		public function setIdPedidos($idPedidos){
			$this->idPedidos = $idPedidos;
		}
		public function getFechaPedido(){
			return $this->fechaPedido;
		}
		public function setFechaPedido($fechaPedido){
			$this->fechaPedido = $fechaPedido;
		}
		public function getFechaLimite(){
			return $this->fechaLimite;
		}
		public function setFechaLimite($fechaLimite){
			$this->fechaLimite = $fechaLimite;
		}
		public function getTotalPedido(){
			return $this->totalPedido;
		}
		public function setTotalPedido($totalPedido){
			$this->totalPedido = $totalPedido;
		}
		public function getSucursal_idSucursal(){
			return $this->Sucursal_idSucursal;
		}
		public function setSucursal_idSucursal($Sucursal_idSucursal){
			$this->Sucursal_idSucursal = $Sucursal_idSucursal;
		}
		public function __toString(){
			return "IdPedidos: " . $this->idPedidos . 
				" FechaPedido: " . $this->fechaPedido . 
				" FechaLimite: " . $this->fechaLimite . 
				" TotalPedido: " . $this->totalPedido . 
				" Sucursal_idSucursal: " . $this->Sucursal_idSucursal;
        }
        
        public function visualizarPedidos($conexion){
            $sql = "SELECT 
            p.idPedidos, 
            p.fechaPedido, 
            p.fechaLimite, 
            p.totalPedido, 
            p.Sucursal_idSucursal,
            s.nombreTienda 
            FROM pedidos as p
            INNER JOIN sucursal as s
			ON p.Sucursal_idSucursal = s.idSucursal";
			
			 $resultado = $conexion->ejecutarConsulta($sql);
			 $listaPedidos = array();
			 while($fila = $conexion->obtenerFila($resultado)){
				 $listaPedidos[] = $fila;
			 }
			 
			 return json_encode($listaPedidos);
        }
	}
?>
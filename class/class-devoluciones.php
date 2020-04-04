<?php

	class devolucion{

		private $idDevoluciones;
		private $cantidad;
		private $fechaDevolucion;
		private $estado;
		private $Pedidos_idPedidos;

		public function __construct($idDevoluciones,
					$cantidad,
					$fechaDevolucion,
					$estado,
					$Pedidos_idPedidos){
			$this->idDevoluciones = $idDevoluciones;
			$this->cantidad = $cantidad;
			$this->fechaDevolucion = $fechaDevolucion;
			$this->estado = $estado;
			$this->Pedidos_idPedidos = $Pedidos_idPedidos;
		}
		public function getIdDevoluciones(){
			return $this->idDevoluciones;
		}
		public function setIdDevoluciones($idDevoluciones){
			$this->idDevoluciones = $idDevoluciones;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getFechaDevolucion(){
			return $this->fechaDevolucion;
		}
		public function setFechaDevolucion($fechaDevolucion){
			$this->fechaDevolucion = $fechaDevolucion;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getPedidos_idPedidos(){
			return $this->Pedidos_idPedidos;
		}
		public function setPedidos_idPedidos($Pedidos_idPedidos){
			$this->Pedidos_idPedidos = $Pedidos_idPedidos;
		}
		public function __toString(){
			return "IdDevoluciones: " . $this->idDevoluciones . 
				" Cantidad: " . $this->cantidad . 
				" FechaDevolucion: " . $this->fechaDevolucion . 
				" Estado: " . $this->estado . 
				" Pedidos_idPedidos: " . $this->Pedidos_idPedidos;
        }
        
        public function agregarDevolucion($conexion){

        }

        public function visualizarDevoluciones($conexion){

        }

        public function actualizarEstadoDevolucion($conexion){
            
        }
	}
?>
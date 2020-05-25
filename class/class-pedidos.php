<?php

	class pedidos{

		private $idPedidos;
		private $fechaPedido;
		private $fechaLimite;
		private $totalPedido;
		private $sucursal;

		public function __construct($idPedidos,
					$fechaPedido,
					$fechaLimite,
					$totalPedido,
					$sucursal){
			$this->idPedidos = $idPedidos;
			$this->fechaPedido = $fechaPedido;
			$this->fechaLimite = $fechaLimite;
			$this->totalPedido = $totalPedido;
			$this->sucursal = $sucursal;
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
		public function getsucursal(){
			return $this->sucursal;
		}
		public function setsucursal($sucursal){
			$this->sucursal = $sucursal;
		}
		public function __toString(){
			return "IdPedidos: " . $this->idPedidos . 
				" FechaPedido: " . $this->fechaPedido . 
				" FechaLimite: " . $this->fechaLimite . 
				" TotalPedido: " . $this->totalPedido . 
				" sucursal: " . $this->sucursal;
        }
        
        public function visualizarPedidos($conexion){
            $sql = "SELECT 
            p.idPedidos, 
            p.fechaPedido, 
            p.fechaLimite, 
            p.totalPedido, 
            p.sucursal,
            s.nombreTienda 
            FROM pedidos as p
            INNER JOIN sucursal as s
			ON p.sucursal = s.idSucursal";
			
			 $resultado = $conexion->ejecutarConsulta($sql);
			 $listaPedidos = array();
			 while($fila = $conexion->obtenerFila($resultado)){
				 $listaPedidos[] = $fila;
			 }
			 
			 return json_encode($listaPedidos);
		}
		
		public function agregarpedidos($conexion){ 

			$sql = sprintf("INSERT INTO pedidos(fechaPedido, fechaLimite, totalPedido, sucursal) VALUES (%s,'%s','%s',%s)",
			$conexion->antiInyeccion($this->fechaPedido),
			$conexion->antiInyeccion($this->fechaLimite),
			$conexion->antiInyeccion($this->totalPedido),
			$conexion->antiInyeccion($this->sucursal));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Pedido realizado exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido realizar el pedido";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			


		}
	}
?>
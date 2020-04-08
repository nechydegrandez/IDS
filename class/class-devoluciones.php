<?php

	class devoluciones{

		private $idDevoluciones;
		private $total;
		private $fechaDevolucion;
		private $estado;

		public function __construct($idDevoluciones,
					$total,
					$fechaDevolucion,
					$estado){
			$this->idDevoluciones = $idDevoluciones;
			$this->total = $total;
			$this->fechaDevolucion = $fechaDevolucion;
			$this->estado = $estado;
		}
		public function getIdDevoluciones(){
			return $this->idDevoluciones;
		}
		public function setIdDevoluciones($idDevoluciones){
			$this->idDevoluciones = $idDevoluciones;
		}
		public function getTotal(){
			return $this->total;
		}
		public function setTotal($total){
			$this->total = $total;
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
		public function __toString(){
			return "IdDevoluciones: " . $this->idDevoluciones . 
				" Total: " . $this->total . 
				" FechaDevolucion: " . $this->fechaDevolucion . 
				" Estado: " . $this->estado ;
		}
        
        public function agregarDevolucion($conexion){

        }

        public function visualizarDevoluciones($conexion){
			$sql = "SELECT idDevoluciones,total,fechaDevolucion,estado FROM empresa";
            $resultado = $conexion->ejecutarConsulta($sql);
			$listaDevoluciones = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaDevoluciones[] = $fila;
			}
			return json_encode($listaDevoluciones);
		}	

        public function actualizarEstadoDevolucion($conexion){
            
        }
	}
?>
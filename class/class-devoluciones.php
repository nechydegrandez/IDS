<?php

	class devoluciones{

		private $idDevoluciones;
		private $total;
		private $fechaDevolucion;
		private $estado;
		private $sucursal;

		public function __construct($idDevoluciones,
					$total,
					$fechaDevolucion,
					$estado,
					$sucursal){
			$this->idDevoluciones = $idDevoluciones;
			$this->total = $total;
			$this->fechaDevolucion = $fechaDevolucion;
			$this->estado = $estado;
			$this->sucursal = $sucursal;
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
		public function getSucursal(){
			return $this->sucursal;
		}
		public function setSucursal($sucursal){
			$this->sucursal = $sucursal;
		}
		public function __toString(){
			return "IdDevoluciones: " . $this->idDevoluciones . 
				" Total: " . $this->total . 
				" FechaDevolucion: " . $this->fechaDevolucion . 
				" Estado: " . $this->estado . 
				" Sucursal: " . $this->sucursal;
		}

		public function visualizarDevoluciones($conexion){
			$sql = "SELECT 
					d.idDevoluciones,
					d.total,
					DATE_FORMAT(d.fechaDevolucion, '%d-%m-%Y') as fechaDevolucion,
					d.estado,
					d.sucursal,
					s.nombreTienda
			FROM devoluciones as d
			INNER JOIN sucursal as s
			on d.sucursal = s.idSucursal
			ORDER BY fechaDevolucion desc";

			 $resultado = $conexion->ejecutarConsulta($sql);
			 $listaDevoluciones = array();
			 while($fila = $conexion->obtenerFila($resultado)){
				 $listaDevoluciones[] = $fila;
			 }
			 
			 return json_encode($listaDevoluciones);
 
		}

		public function agregarDevolucion($conexion){ 

			$sql = sprintf("INSERT INTO devoluciones(total, fechaDevolucion, estado, sucursal) VALUES (%s,'%s','%s',%s)",
			$conexion->antiInyeccion($this->total),
			$conexion->antiInyeccion($this->fechaDevolucion),
			$conexion->antiInyeccion($this->estado),
			$conexion->antiInyeccion($this->sucursal));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Devolucion realizada exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido realizar la Devolucion";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			


		}
	}
?>
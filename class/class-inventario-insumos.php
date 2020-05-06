<?php

	class inventarioInsumo{

		private $idInventario_Insumos;
		private $cantidad;
		private $fechaLlegada;
		private $Insumos_idInsumos;

		public function __construct($idInventario_Insumos,
					$cantidad,
					$fechaLlegada,
					$Insumos_idInsumos){
			$this->idInventario_Insumos = $idInventario_Insumos;
			$this->cantidad = $cantidad;
			$this->fechaLlegada = $fechaLlegada;
			$this->Insumos_idInsumos = $Insumos_idInsumos;
		}
		public function getIdInventario_Insumos(){
			return $this->idInventario_Insumos;
		}
		public function setIdInventario_Insumos($idInventario_Insumos){
			$this->idInventario_Insumos = $idInventario_Insumos;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getFechaLlegada(){
			return $this->fechaLlegada;
		}
		public function setFechaLlegada($fechaLlegada){
			$this->fechaLlegada = $fechaLlegada;
		}
		public function getInsumos_idInsumos(){
			return $this->Insumos_idInsumos;
		}
		public function setInsumos_idInsumos($Insumos_idInsumos){
			$this->Insumos_idInsumos = $Insumos_idInsumos;
		}
		public function __toString(){
			return "IdInventario_Insumos: " . $this->idInventario_Insumos . 
				" Cantidad: " . $this->cantidad . 
				" FechaLlegada: " . $this->fechaLlegada . 
				" Insumos_idInsumos: " . $this->Insumos_idInsumos;
		}

		public function visualizarInventarioInsumos($conexion){
			$sql = "SELECT i.idInventario_Insumos,i.cantidad,i.fechaLlegada,i.Insumos_idInsumos,ins.nombreInsumo
					FROM inventario_insumos as i
					INNER JOIN insumos as ins
					ON i.Insumos_idInsumos = ins.idInsumos
					ORDER BY i.fechaLlegada DESC";
			$resultado = $conexion->ejecutarConsulta($sql);
			$listaInventarioInsumos = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaInventarioInsumos[] = $fila;
			}

			return json_encode($listaInventarioInsumos);
		}

		public function agregarInventarioInsumo($conexion){
			$sql = sprintf('INSERT INTO inventario_insumos(cantidad, fechaLlegada, Insumos_idInsumos) VALUES (%s,"%s",%s)',
			$conexion->antiInyeccion($this->cantidad),
			$conexion->antiInyeccion($this->fechaLlegada),
			$conexion->antiInyeccion($this->Insumos_idInsumos));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Insumo agregado a inventario exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido agregar el insumo";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
		}
	}
?>
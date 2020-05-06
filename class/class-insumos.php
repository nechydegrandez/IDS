<?php

	class insumos{

		private $idInsumos;
		private $nombreInsumo;
		private $precio;
		private $proveedor;

		public function __construct($idInsumos,
					$nombreInsumo,
					$precio,
					$proveedor){
			$this->idInsumos = $idInsumos;
			$this->nombreInsumo = $nombreInsumo;
			$this->precio = $precio;
			$this->proveedor = $proveedor;
		}
		public function getIdInsumos(){
			return $this->idInsumos;
		}
		public function setIdInsumos($idInsumos){
			$this->idInsumos = $idInsumos;
		}
		public function getNombreInsumo(){
			return $this->nombreInsumo;
		}
		public function setNombreInsumo($nombreInsumo){
			$this->nombreInsumo = $nombreInsumo;
		}
		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}
		public function getProveedor(){
			return $this->proveedor;
		}
		public function setProveedor($proveedor){
			$this->proveedor = $proveedor;
		}
		public function __toString(){
			return "IdInsumos: " . $this->idInsumos . 
				" NombreInsumo: " . $this->nombreInsumo . 
				" Precio: " . $this->precio . 
				" Proveedor: " . $this->proveedor;
        }
        
        public function visualizarInsumos($conexion){
            $sql = "SELECT idInsumos, nombreInsumo, precio, proveedor FROM insumos";
            $resultado = $conexion->ejecutarConsulta($sql);
			$listaInsumos = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaInsumos[] = $fila;
			}

			return json_encode($listaInsumos);
		}
		
		public function registrarInsumo($conexion){
			$sql = sprintf("INSERT INTO insumos(nombreInsumo, precio, proveedor) VALUES ('%s',%s,'%s')",
			$conexion->antiInyeccion($this->nombreInsumo),
			$conexion->antiInyeccion($this->precio),
			$conexion->antiInyeccion($this->proveedor));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Insumo agregado exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido agregar el Insumo";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
		}
	}
?>
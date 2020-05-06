<?php

	class empresas{

		private $idEmpresa;
		private $nombreEmpresa;
		private $direccionPrincipal;

		public function __construct($idEmpresa,
					$nombreEmpresa,
					$direccionPrincipal){
			$this->idEmpresa = $idEmpresa;
			$this->nombreEmpresa = $nombreEmpresa;
			$this->direccionPrincipal = $direccionPrincipal;
		}
		public function getIdEmpresa(){
			return $this->idEmpresa;
		}
		public function setIdEmpresa($idEmpresa){
			$this->idEmpresa = $idEmpresa;
		}
		public function getNombreEmpresa(){
			return $this->nombreEmpresa;
		}
		public function setNombreEmpresa($nombreEmpresa){
			$this->nombreEmpresa = $nombreEmpresa;
		}
		
		public function getDireccionPrincipal(){
			return $this->direccionPrincipal;
		}
		public function setDireccionPrincipal($direccionPrincipal){
			$this->direccionPrincipal = $direccionPrincipal;
		}
		public function __toString(){
			return "IdEmpresa: " . $this->idEmpresa .
				" NombreEmpresa: " . $this->nombreEmpresa .
				" DireccionPrincipal: " . $this->direccionPrincipal;
        }

        public function obtenerListaEmpresas($conexion){

            $sql = "SELECT idEmpresa,
			nombreEmpresa,
			direccionPrincipal
			FROM empresa";

            $resultado = $conexion->ejecutarConsulta($sql);
			$listaEmpresas = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaEmpresas[] = $fila;
			}
			
			$final = json_encode($listaEmpresas);

			return $final;

		}

		public function agregarEmpresa($conexion){
			$sql = sprintf("INSERT INTO empresa(idEmpresa, nombreEmpresa, direccionPrincipal) VALUES (%s,'%s','%s')",
			$conexion->antiInyeccion($this->idEmpresa),
			$conexion->antiInyeccion($this->nombreEmpresa),
			$conexion->antiInyeccion($this->direccionPrincipal));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Empresa agregada exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido agregar la Empresa";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
		}


	}
?>
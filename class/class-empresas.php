<?php

	class empresas{

		private $idEmpresa;
		private $nombreEmpresa;
		private $RTN;
		private $direccionPrincipal;

		public function __construct($idEmpresa,
					$nombreEmpresa,
					$RTN,
					$direccionPrincipal){
			$this->idEmpresa = $idEmpresa;
			$this->nombreEmpresa = $nombreEmpresa;
			$this->RTN = $RTN;
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
		public function getRTN(){
			return $this->RTN;
		}
		public function setRTN($RTN){
			$this->RTN = $RTN;
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
				" RTN: " . $this->RTN .
				" DireccionPrincipal: " . $this->direccionPrincipal;
        }

        public function obtenerListaEmpresas($conexion){

            $sql = "SELECT idEmpresa,
			nombreEmpresa,
			RTN,
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


	}
?>
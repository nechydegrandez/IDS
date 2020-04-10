<?php

	class sucursales{

		private $idSucursal;
		private $nombreTienda;
		private $telefonoTienda;
		private $Empresa_idEmpresa;
		private $Municipio_idMunicipio;
		private $Gerente;

		public function __construct($idSucursal,
					$nombreTienda,
					$telefonoTienda,
					$Empresa_idEmpresa,
					$Municipio_idMunicipio,
					$Gerente){
			$this->idSucursal = $idSucursal;
			$this->nombreTienda = $nombreTienda;
			$this->telefonoTienda = $telefonoTienda;
			$this->Empresa_idEmpresa = $Empresa_idEmpresa;
			$this->Municipio_idMunicipio = $Municipio_idMunicipio;
			$this->Gerente = $Gerente;
		}
		public function getIdSucursal(){
			return $this->idSucursal;
		}
		public function setIdSucursal($idSucursal){
			$this->idSucursal = $idSucursal;
		}
		public function getNombreTienda(){
			return $this->nombreTienda;
		}
		public function setNombreTienda($nombreTienda){
			$this->nombreTienda = $nombreTienda;
		}
		public function getTelefonoTienda(){
			return $this->telefonoTienda;
		}
		public function setTelefonoTienda($telefonoTienda){
			$this->telefonoTienda = $telefonoTienda;
		}
		public function getEmpresa_idEmpresa(){
			return $this->Empresa_idEmpresa;
		}
		public function setEmpresa_idEmpresa($Empresa_idEmpresa){
			$this->Empresa_idEmpresa = $Empresa_idEmpresa;
		}
		public function getMunicipio_idMunicipio(){
			return $this->Municipio_idMunicipio;
		}
		public function setMunicipio_idMunicipio($Municipio_idMunicipio){
			$this->Municipio_idMunicipio = $Municipio_idMunicipio;
		}
		public function getGerente(){
			return $this->Gerente;
		}
		public function setGerente($Gerente){
			$this->Gerente = $Gerente;
		}
		public function __toString(){
			return "IdSucursal: " . $this->idSucursal . 
				" NombreTienda: " . $this->nombreTienda . 
				" TelefonoTienda: " . $this->telefonoTienda . 
				" Empresa_idEmpresa: " . $this->Empresa_idEmpresa . 
				" Municipio_idMunicipio: " . $this->Municipio_idMunicipio . 
				" Gerente: " . $this->Gerente;
        }
        
        public function visualizarSucursales($conexion){
            $sql="SELECT idSucursal,nombreTienda,telefonoTienda,Empresa_idEmpresa, Municipio_idMunicipio, Gerente 
            from sucursal";

            $resultado = $conexion->ejecutarConsulta($sql);
            $listaSucursales = array();
            while($fila = $conexion->obtenerFila($resultado)){
                $listaSucursales[] = $fila;
            }

            $final = json_encode($listaSucursales);

            return $final;
        }
	}
?>
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
            $sql="SELECT s.idSucursal,s.nombreTienda,s.telefonoTienda,s.Empresa_idEmpresa, s.Municipio_idMunicipio, s.Gerente, e.nombreEmpresa,m.nombreMunicipio
			from sucursal as s
			inner join empresa as e
			ON s.Empresa_idEmpresa = e.idEmpresa
			inner join municipio as m
			ON s.Municipio_idMunicipio = m.idMunicipio";

            $resultado = $conexion->ejecutarConsulta($sql);
            $listaSucursales = array();
            while($fila = $conexion->obtenerFila($resultado)){
                $listaSucursales[] = $fila;
            }

            $final = json_encode($listaSucursales);

            return $final;
		}

		
		public function agregarSucursal($conexion){
			$sql = sprintf("INSERT INTO sucursal(nombreTienda, telefonoTienda, Empresa_idEmpresa, Municipio_idMunicipio, Gerente) VALUES ('%s','%s',%s,%s,'%s')",
			$conexion->antiInyeccion($this->nombreTienda),
			$conexion->antiInyeccion($this->telefonoTienda),
			$conexion->antiInyeccion($this->Empresa_idEmpresa),
			$conexion->antiInyeccion($this->Municipio_idMunicipio),
			$conexion->antiInyeccion($this->Gerente));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Sucursal agregada exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido agregar la sucursal";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
		}


		public function visualizarSucursalesEmpresa($conexion){
			$sql=sprintf("SELECT idSucursal,nombreTienda,Empresa_idEmpresa
			from sucursal
			WHERE Empresa_idEmpresa = %s",
			$conexion->antiInyeccion($this->Empresa_idEmpresa));

            $resultado = $conexion->ejecutarConsulta($sql);
            $SucursalesEspecificas = array();
            while($fila = $conexion->obtenerFila($resultado)){
                $SucursalesEspecificas[] = $fila;
            }

            $final = json_encode($SucursalesEspecificas);

            return $final;
		}
	}
?>
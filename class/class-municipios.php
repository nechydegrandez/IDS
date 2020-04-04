<?php

	class municipios{

		private $idMunicipio;
		private $nombreMunicipio;
		private $Departamento_idDepartamento;

		public function __construct($idMunicipio,
					$nombreMunicipio,
					$Departamento_idDepartamento){
			$this->idMunicipio = $idMunicipio;
			$this->nombreMunicipio = $nombreMunicipio;
			$this->Departamento_idDepartamento = $Departamento_idDepartamento;
		}
		public function getIdMunicipio(){
			return $this->idMunicipio;
		}
		public function setIdMunicipio($idMunicipio){
			$this->idMunicipio = $idMunicipio;
		}
		public function getNombreMunicipio(){
			return $this->nombreMunicipio;
		}
		public function setNombreMunicipio($nombreMunicipio){
			$this->nombreMunicipio = $nombreMunicipio;
		}
		public function getDepartamento_idDepartamento(){
			return $this->Departamento_idDepartamento;
		}
		public function setDepartamento_idDepartamento($Departamento_idDepartamento){
			$this->Departamento_idDepartamento = $Departamento_idDepartamento;
		}
		public function __toString(){
			return "IdMunicipio: " . $this->idMunicipio . 
				" NombreMunicipio: " . $this->nombreMunicipio . 
				" Departamento_idDepartamento: " . $this->Departamento_idDepartamento;
		}
	}
?>
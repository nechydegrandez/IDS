<?php

	class departamentos{

		private $idDepartamento;
		private $nombreDepartamento;

		public function __construct($idDepartamento,
					$nombreDepartamento){
			$this->idDepartamento = $idDepartamento;
			$this->nombreDepartamento = $nombreDepartamento;
		}
		public function getIdDepartamento(){
			return $this->idDepartamento;
		}
		public function setIdDepartamento($idDepartamento){
			$this->idDepartamento = $idDepartamento;
		}
		public function getNombreDepartamento(){
			return $this->nombreDepartamento;
		}
		public function setNombreDepartamento($nombreDepartamento){
			$this->nombreDepartamento = $nombreDepartamento;
		}
		public function __toString(){
			return "IdDepartamento: " . $this->idDepartamento . 
				" NombreDepartamento: " . $this->nombreDepartamento;
		}
	}
?>
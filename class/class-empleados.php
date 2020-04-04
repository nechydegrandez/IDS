<?php

	class empleados{

		private $idEmpleados;
		private $cargo;
		private $Personas_idPersonas;
		private $Usuarios_idUsuario;

		public function __construct($idEmpleados,
					$cargo,
					$Personas_idPersonas,
					$Usuarios_idUsuario){
			$this->idEmpleados = $idEmpleados;
			$this->cargo = $cargo;
			$this->Personas_idPersonas = $Personas_idPersonas;
			$this->Usuarios_idUsuario = $Usuarios_idUsuario;
		}
		public function getIdEmpleados(){
			return $this->idEmpleados;
		}
		public function setIdEmpleados($idEmpleados){
			$this->idEmpleados = $idEmpleados;
		}
		public function getCargo(){
			return $this->cargo;
		}
		public function setCargo($cargo){
			$this->cargo = $cargo;
		}
		public function getPersonas_idPersonas(){
			return $this->Personas_idPersonas;
		}
		public function setPersonas_idPersonas($Personas_idPersonas){
			$this->Personas_idPersonas = $Personas_idPersonas;
		}
		public function getUsuarios_idUsuario(){
			return $this->Usuarios_idUsuario;
		}
		public function setUsuarios_idUsuario($Usuarios_idUsuario){
			$this->Usuarios_idUsuario = $Usuarios_idUsuario;
		}
		public function __toString(){
			return "IdEmpleados: " . $this->idEmpleados . 
				" Cargo: " . $this->cargo . 
				" Personas_idPersonas: " . $this->Personas_idPersonas . 
				" Usuarios_idUsuario: " . $this->Usuarios_idUsuario;
		}
	}
?>
<?php

	class usuarios{

		private $idUsuario;
		private $contrasenia;
		private $TipoUsuario_idTipoUsuario;
		private $estado;

		public function __construct($idUsuario,
					$contrasenia,
					$TipoUsuario_idTipoUsuario,
					$estado){
			$this->idUsuario = $idUsuario;
			$this->contrasenia = $contrasenia;
			$this->TipoUsuario_idTipoUsuario = $TipoUsuario_idTipoUsuario;
			$this->estado = $estado;
		}
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		public function getContrasenia(){
			return $this->contrasenia;
		}
		public function setContrasenia($contrasenia){
			$this->contrasenia = $contrasenia;
		}
		public function getTipoUsuario_idTipoUsuario(){
			return $this->TipoUsuario_idTipoUsuario;
		}
		public function setTipoUsuario_idTipoUsuario($TipoUsuario_idTipoUsuario){
			$this->TipoUsuario_idTipoUsuario = $TipoUsuario_idTipoUsuario;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "IdUsuario: " . $this->idUsuario . 
				" Contrasenia: " . $this->contrasenia . 
				" TipoUsuario_idTipoUsuario: " . $this->TipoUsuario_idTipoUsuario . 
				" Estado: " . $this->estado;
		}
	}
?>
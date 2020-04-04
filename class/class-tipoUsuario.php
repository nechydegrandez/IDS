<?php

	class tipoUsuario{

		private $idTipoUsuario;
		private $TipoUsuario;

		public function __construct($idTipoUsuario,
					$TipoUsuario){
			$this->idTipoUsuario = $idTipoUsuario;
			$this->TipoUsuario = $TipoUsuario;
		}
		public function getIdTipoUsuario(){
			return $this->idTipoUsuario;
		}
		public function setIdTipoUsuario($idTipoUsuario){
			$this->idTipoUsuario = $idTipoUsuario;
		}
		public function getTipoUsuario(){
			return $this->TipoUsuario;
		}
		public function setTipoUsuario($TipoUsuario){
			$this->TipoUsuario = $TipoUsuario;
		}
		public function __toString(){
			return "IdTipoUsuario: " . $this->idTipoUsuario . 
				" TipoUsuario: " . $this->TipoUsuario;
		}
	}
?>
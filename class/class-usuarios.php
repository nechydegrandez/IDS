<?php

	class usuarios{

		private $idUsuario;
		private $contrasenia;
		private $TipoUsuario_idTipoUsuario;
		private $estado;
		private $personas;

		public function __construct($idUsuario,
					$contrasenia,
					$TipoUsuario_idTipoUsuario,
					$estado,
					$personas){
			$this->idUsuario = $idUsuario;
			$this->contrasenia = $contrasenia;
			$this->TipoUsuario_idTipoUsuario = $TipoUsuario_idTipoUsuario;
			$this->estado = $estado;
			$this->personas = $personas;
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
		public function getPersonas(){
			return $this->personas;
		}
		public function setPersonas($personas){
			$this->personas = $personas;
		}
		public function __toString(){
			return "IdUsuario: " . $this->idUsuario . 
				" Contrasenia: " . $this->contrasenia . 
				" TipoUsuario_idTipoUsuario: " . $this->TipoUsuario_idTipoUsuario . 
				" Estado: " . $this->estado . 
				" Personas: " . $this->personas;
		}
   
        public function visualizarEditarUsuario($conexion){
			$sql = sprintf("UPDATE usuarios SET estado='%s' WHERE personas=%s",
			$conexion->antiInyeccion($this->estado),
			$conexion->antiInyeccion($this->personas));
			$resultado = $conexion->ejecutarConsulta($sql);
			if($resultado){
				$mensaje["mensaje"]="Devolucion realizada exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido realizar la Devolucion";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
		}

	}
?>
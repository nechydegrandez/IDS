<?php

	class personas{

		private $idPersonas;
		private $nombre;
		private $apellido;
		private $nidentidad;
		private $correo;
		private $direccion;
		private $telefono;
		private $genero;

		public function __construct($idPersonas,
					$nombre,
					$apellido,
					$nidentidad,
					$correo,
					$direccion,
					$telefono,
					$genero){
			$this->idPersonas = $idPersonas;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->nidentidad = $nidentidad;
			$this->correo = $correo;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
			$this->genero = $genero;
		}
		public function getIdPersonas(){
			return $this->idPersonas;
		}
		public function setIdPersonas($idPersonas){
			$this->idPersonas = $idPersonas;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getNidentidad(){
			return $this->nidentidad;
		}
		public function setNidentidad($nidentidad){
			$this->nidentidad = $nidentidad;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function __toString(){
			return "IdPersonas: " . $this->idPersonas . 
				" Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Nidentidad: " . $this->nidentidad . 
				" Correo: " . $this->correo . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono . 
				" Genero: " . $this->genero;
		}

		public function visualizarPersonas($conexion){
			$sql = "SELECT idPersonas,
			nombre,
			apellido,
			nidentidad,
			correo,
			direccion,
			telefono,
			genero FROM personas";
			$resultado = $conexion->ejecutarConsulta($sql);
			$listaPersonas = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaPersonas[] = $fila;
			}
			return json_encode($listaPersonas);
		}
	}
?>
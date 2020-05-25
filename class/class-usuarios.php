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
		public static function verificarUsuario($conexion,$usuario,$password){
			#consulta
			$sql="SELECT  u.IDUSUARIO, u.IDTIPOUSUARIO, u.USUARIO, 
						  e.IDEMPLEADOS, CONCAT(p.NOMBRE,' ',p.APELLIDO) AS NOMBRE
				  FROM usuarios u
				  INNER JOIN empleados  e
				  ON u.idusuario = e.idusuario
				  INNER JOIN personas p
				  ON p.idpersonas=e.idpersonas
				  WHERE USUARIO='$usuario' && CONTRASEÑA='$password'";
			


			#resultado de la consulta				
			$resultado=$conexion->ejecutarConsulta($sql);
			$cantidadRegistros=$conexion->cantidadRegistros($resultado);
			
			if ($cantidadRegistros!=0)  {
				$fila = $conexion->obtenerFila($resultado);
				session_start();
				$_SESSION['status']=true;
				$_SESSION['idusuario']=$fila['IDUSUARIO'];
				$_SESSION['usuario']=$fila['USUARIO'];
				$_SESSION['idempleados']=$fila['IDEMPLEADOS'];
				$_SESSION['nombre']=$fila['NOMBRE'];
				$_SESSION['IDTIPOUSUARIO']=$fila['IDTIPOUSUARIO'];
				$respuesta['tipousuario']=$fila['IDTIPOUSUARIO'];
				$respuesta['loggedin'] = 1;
				$respuesta["mensaje"]="tiene acceso" ;
			}
			else {
				//echo'correo o contrasenia invalidos';	
				session_start();
				$_SESSION['status']=false;
				$respuesta['loggedin'] = 0;
				$respuesta["mensaje"]="No tiene acceso" ;
				}	  
			echo json_encode($respuesta);
		 }





	}
?>
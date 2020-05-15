<?php

	class registrarFacturas{

		private $cod_empresa;
		private $cod_sucursla;
		private $fecha_factura;

		public function __construct($cod_empresa,
					$cod_sucursla,
					$fecha_factura){
			$this->cod_empresa = $cod_empresa;
			$this->cod_sucursla = $cod_sucursla;
			$this->fecha_factura = $fecha_factura;
		}
		public function getCod_empresa(){
			return $this->cod_empresa;
		}
		public function setCod_empresa($cod_empresa){
			$this->cod_empresa = $cod_empresa;
		}
		public function getCod_sucursla(){
			return $this->cod_sucursla;
		}
		public function setCod_sucursla($cod_sucursla){
			$this->cod_sucursla = $cod_sucursla;
		}
		public function getFecha_factura(){
			return $this->fecha_factura;
		}
		public function setFecha_factura($fecha_factura){
			$this->fecha_factura = $fecha_factura;
		}
		public function __toString(){
			return "Cod_empresa: " . $this->cod_empresa . 
				" Cod_sucursla: " . $this->cod_sucursla . 
				" Fecha_factura: " . $this->fecha_factura;
        }
        
        public function registrarFactura($conexion){
            $sql = sprintf("CALL procesar_venta(%s,%s,'%s')",
			$conexion->antiInyeccion($this->cod_empresa),
			$conexion->antiInyeccion($this->cod_sucursla),
			$conexion->antiInyeccion($this->fecha_factura));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Factura agregada exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido agregar la Factura";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
        }
	}
?>
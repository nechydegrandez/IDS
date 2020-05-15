<?php

	class DetalleTemp{

		private $idDetalleTemp;
		private $cantidad;
		private $idProducto;

		public function __construct($idDetalleTemp,
					$cantidad,
					$idProducto){
			$this->idDetalleTemp = $idDetalleTemp;
			$this->cantidad = $cantidad;
			$this->idProducto = $idProducto;
		}
		public function getIdDetalleTemp(){
			return $this->idDetalleTemp;
		}
		public function setIdDetalleTemp($idDetalleTemp){
			$this->idDetalleTemp = $idDetalleTemp;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getIdProducto(){
			return $this->idProducto;
		}
		public function setIdProducto($idProducto){
			$this->idProducto = $idProducto;
		}
		public function __toString(){
			return "IdDetalleTemp: " . $this->idDetalleTemp . 
				" Cantidad: " . $this->cantidad . 
				" IdProducto: " . $this->idProducto;
        }
        
        public function insertarProducto($conexion){
                $sql = sprintf("INSERT INTO detalle_temp(cantidad, idProducto) VALUES (%s,%s)",
                $conexion->antiInyeccion($this->cantidad),
                $conexion->antiInyeccion($this->idProducto));
                $resultado = $conexion->ejecutarConsulta($sql);
    
                if($resultado){
                    $mensaje["mensaje"]="Producto agregado exitosamente";
                    $mensaje["sql"]=$sql;
                    return json_encode($mensaje);
                }
                else{
                    $mensaje["mensaje"]="No se ha podido agregar el Producto";
                    $mensaje["sql"]=$sql;
                    return json_encode($mensaje);
                }
        }

        public function productosTablaTemporal($conexion){
            $sql = "SELECT dtmp.idDetalleTemp, dtmp.cantidad, dtmp.idProducto,p.nombre,p.precioVenta
            FROM detalle_temp as dtmp
            INNER JOIN productos as p
            ON dtmp.idProducto = p.idProductos";
            $resultado = $conexion->ejecutarConsulta($sql);
			$listaProductosDetalleTemp = array();
			while($fila = $conexion->obtenerFila($resultado)){
				$listaProductosDetalleTemp[] = $fila;
			}

			return json_encode($listaProductosDetalleTemp);
		}
		
		public function eliminarProductoTablaTemporal($conexion){
			$sql = sprintf("DELETE FROM detalle_temp WHERE idProducto = %s",
			$conexion->antiInyeccion($this->idProducto));
			$resultado = $conexion->ejecutarConsulta($sql);

			if($resultado){
				$mensaje["mensaje"]="Producto eliminado exitosamente";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido eliminar el Producto";
				$mensaje["sql"]=$sql;
				return json_encode($mensaje);
			}
		}
	}
?>
<?php

	class inventarioProductos{

		private $idinventario_Producto;
		private $cantidadBandejas;
		private $Productos_idProductos;

		public function __construct($idinventario_Producto,
					$cantidadBandejas,
					$Productos_idProductos){
			$this->idinventario_Producto = $idinventario_Producto;
			$this->cantidadBandejas = $cantidadBandejas;
			$this->Productos_idProductos = $Productos_idProductos;
		}
		public function getIdinventario_Producto(){
			return $this->idinventario_Producto;
		}
		public function setIdinventario_Producto($idinventario_Producto){
			$this->idinventario_Producto = $idinventario_Producto;
		}
		public function getCantidadBandejas(){
			return $this->cantidadBandejas;
		}
		public function setCantidadBandejas($cantidadBandejas){
			$this->cantidadBandejas = $cantidadBandejas;
		}
		public function getProductos_idProductos(){
			return $this->Productos_idProductos;
		}
		public function setProductos_idProductos($Productos_idProductos){
			$this->Productos_idProductos = $Productos_idProductos;
		}
		public function __toString(){
			return "Idinventario_Producto: " . $this->idinventario_Producto . 
				" CantidadBandejas: " . $this->cantidadBandejas . 
				" Productos_idProductos: " . $this->Productos_idProductos;
        }
        
        public function visualizarInventarioProductos($conexion){
            $sql="SELECT 
            i.idinventario_Producto, 
            i.cantidadBandejas,
            i.Productos_idProductos,
            p.nombre,
			p.empresa,
			e.nombreEmpresa
            FROM inventario_producto as i
            INNER JOIN productos as p
			ON i.Productos_idProductos = p.idProductos
			INNER JOIN empresa as e
			ON p.empresa = e.idEmpresa";

            $resultado = $conexion->ejecutarConsulta($sql);
            $listaInventarioProductos = array();
            while($fila = $conexion->obtenerFila($resultado)){
                $listaInventarioProductos[] = $fila;
            }

            return json_encode($listaInventarioProductos);
		}
		
		public function visualizarInfoProductoEspecifico($conexion){

			$sql= sprintf("SELECT idinventario_Producto, cantidadBandejas, Productos_idProductos 
			FROM inventario_producto 
			WHERE Productos_idProductos = %s",
			$conexion->antiInyeccion($this->Productos_idProductos));

			$resultado = $conexion->ejecutarConsulta($sql);
            $inventarioProductoEspecifico = array();
            while($fila = $conexion->obtenerFila($resultado)){
                $inventarioProductoEspecifico[] = $fila;
            }

            return json_encode($inventarioProductoEspecifico);

		}

		public function disminuirInventarioProducto($conexion){
			$sql = sprintf("UPDATE inventario_producto 
			SET cantidadBandejas = %s 
			WHERE Productos_idProductos = %s",
			$conexion->antiInyeccion($this->cantidadBandejas),
			$conexion->antiInyeccion($this->Productos_idProductos));
			$resultado = $conexion->ejecutarConsulta($sql);
			if($resultado){
				$mensaje["mensaje"]="Cantidad de Producto disminuida exitosamente";
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido actualizar la cantidad del producto";
				return json_encode($mensaje);
			}
		}

		public function aumentarInventarioProducto($conexion){
			$sql = sprintf("UPDATE inventario_producto 
			SET cantidadBandejas = %s 
			WHERE Productos_idProductos = %s",
			$conexion->antiInyeccion($this->cantidadBandejas),
			$conexion->antiInyeccion($this->Productos_idProductos));
			$resultado = $conexion->ejecutarConsulta($sql);
			if($resultado){
				$mensaje["mensaje"]="Cantidad de Producto aumentada exitosamente";
				return json_encode($mensaje);
			}
			else{
				$mensaje["mensaje"]="No se ha podido actualizar la cantidad del producto";
				return json_encode($mensaje);
			}
		}
	}
?>
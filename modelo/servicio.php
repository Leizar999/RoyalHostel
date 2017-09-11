<?php 
	class ControladorServicio {
		private $servicio;

		public function __construct($servicio){
			$this->servicio = $servicio;
		}

		public function leerDatosServicio($tipo, $descripcion, $precio){
			$this->servicio->setTipo($tipo);
			$this->servicio->setDescripcion($descripcion);
			$this->servicio->setPrecio($precio);
		}
	}
?>
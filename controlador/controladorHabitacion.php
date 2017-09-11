<?php 
	class ControladorHabitacion {
		private $habitacion;

		public function __construct($habitacion){
			$this->habitacion = $habitacion;
		}

		public function leerDatosHabitacion($tipo, $descripcion, $precio){
			$this->habitacion->setTipo($tipo);
			$this->habitacion->setDescripcion($descripcion);
			$this->habitacion->setPrecio($precio);
		}
	}
?>
<?php
	class HabitacionDAO {
		private $habitacion;

		public function __construct($habitacion){
			$this->habitacion = $habitacion;
		}

		public static function getHabitacion($id){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM habitaciones WHERE id = '$id';";
			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public function insertarHabitacion(){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "INSERT INTO habitaciones (tipo, descripcion, precio) VALUES ('" . $this->habitacion->getTipo() . "', '" . $this->habitacion->getDescripcion() . "', '" . $this->habitacion->getPrecio() . "')";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public function actualizarHabitacion($id, $columna, $valor){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "UPDATE habitaciones SET $columna = '$valor' WHERE id = '$id'";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public function borrarHabitacion($id){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "DELETE FROM habitaciones WHERE id = $id";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}
		
		public static function recogerUltimoId(){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT MAX(id) AS ultimoid FROM habitaciones";

			$resultado = $bbdd->consulta($sql);

			$ultimoid = $bbdd->fetch($resultado)["ultimoid"];

			return $ultimoid;
		}

		public static function getHabitaciones(){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM habitaciones";

			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public static function fetchHabitacion($cursor){
			$bbdd = BD::getInstancia();
			return $bbdd->fetch($cursor);
		}
	}
?>
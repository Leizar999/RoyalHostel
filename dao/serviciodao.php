<?php
	class ServicioDAO {
		private $servicio;

		public function __construct($servicio){
			$this->servicio = $servicio;
		}

		public static function getServicio($id){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM servicios WHERE id = '$id';";
			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public function insertarServicio(){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "INSERT INTO servicios (tipo, descripcion, precio) VALUES ('" . $this->servicio->getTipo() . "', '" . $this->servicio->getDescripcion() . "', '" . $this->servicio->getPrecio() . "')";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public function actualizarServicio($id, $columna, $valor){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "UPDATE servicios SET $columna = '$valor' WHERE id = '$id'";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public function borrarServicio($id){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "DELETE FROM servicios WHERE id = $id";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}
		
		public static function recogerUltimoId(){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT MAX(id) AS ultimoid FROM servicios";

			$resultado = $bbdd->consulta($sql);

			$ultimoid = $bbdd->fetch($resultado)["ultimoid"];

			return $ultimoid;
		}

		public static function getServicios(){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM servicios";

			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public static function fetchServicio($cursor){
			$bbdd = BD::getInstancia();
			return $bbdd->fetch($cursor);
		}
	}
?>
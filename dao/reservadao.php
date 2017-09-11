<?php
	class ReservaDAO {
		private $reserva;

		public function __construct($reserva){
			$this->reserva = $reserva;
		}

		public static function getReserva($id){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM reservas WHERE id = '$id';";
			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public function insertarReserva(){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();

			$sql = "INSERT INTO `reservas`(`idHab`, `tipoHab`, `login`, `llegada`, `salida`, `adultos`, `children`, `servicio`, `pago`) VALUES ('" . $this->reserva->getIdHab() . "', '" . $this->reserva->getTipoHab() . "', '" . $this->reserva->getLogin() . "', '" . $this->reserva->getLlegada() . "', '" . $this->reserva->getSalida() . "', '" . $this->reserva->getAdultos() . "', '" . $this->reserva->getChildren() . "', '" . $this->reserva->getServicio() . "', '" . $this->reserva->getPago() . "')";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public function actualizarReserva($id, $columna, $valor){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "UPDATE reservas SET $columna = '$valor' WHERE id = '$id'";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public static function recogerUltimoId(){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT MAX(id) AS ultimoid FROM reservas";

			$resultado = $bbdd->consulta($sql);

			$ultimoid = $bbdd->fetch($resultado)["ultimoid"];

			return $ultimoid;
		}

		public static function getReservas(){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM reservas";

			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public static function getReservasFechas($salida, $tipo){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM reservas WHERE salida > '$salida' AND tipoHab = '$tipo'";

			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public static function fetchReserva($cursor){
			$bbdd = BD::getInstancia();
			return $bbdd->fetch($cursor);
		}

		public function getDias($id){

			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT llegada, salida FROM reservas WHERE idHab='$id'";

			$resultado = $bbdd->consulta($sql);

			$reservaDAO = new ReservaDAO($id);

			$fechas = array();

			$count = 0;

			$fecha = $reservaDAO::fetchReserva($resultado);

			while($fecha){

				$fecha = str_replace("/", "-", $fecha);

				for($i = date('Y-m-d', strtotime($fecha["llegada"])); $i <= date('Y-m-d', strtotime($fecha["salida"])); $i = date("Y-m-d", strtotime($i ."+ 1 days"))){
			   		$fechas[$count] = str_replace("-", "/", date('d-m-Y', strtotime($i)));
			   		$count++;
				}

				$fecha = $reservaDAO::fetchReserva($resultado);
			}


			return $fechas;
		}
	}
?>

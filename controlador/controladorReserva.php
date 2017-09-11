<?php 
	class ControladorReserva {
		private $reserva;

		public function __construct($reserva){
			$this->reserva = $reserva;
		}

		public function leerDatosReserva($idHab, $tipoHab, $login, $llegada, $salida, $adultos, $children, $servicio, $pago){
			
			$this->reserva->setIdHab($idHab);
			$this->reserva->setTipoHab($tipoHab);
			$this->reserva->setLogin($login);
			$this->reserva->setLlegada($llegada);
			$this->reserva->setSalida($salida);
			$this->reserva->setAdultos($adultos);
			$this->reserva->setChildren($children);
			$this->reserva->setServicio($servicio);
			$this->reserva->setPago($pago);
		}
	}
?>
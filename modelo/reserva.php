<?php
	class Reserva {
		private $idHab;
		private $tipoHab;
		private $login;
		private $llegada;
		private $salida;
		private $adultos;
		private $children;
		private $servicio;
		private $pago;

		//ZONA DE CONSTRUCTOR POR DEFECTO
		public function __construct(){
			$this->idHab = "";
			$this->tipoHab = "";
			$this->login = "";
			$this->llegada = "";
			$this->salida = "";
			$this->adultos = "";
			$this->children = "";
			$this->servicio = "";
			$this->pago = "";
		}
		//ZONA DE SETTERS
		public function setIdHab($idHab){
			$this->idHab = $idHab;
		}
		public function setTipoHab($tipoHab){
			$this->tipoHab = $tipoHab;
		}
		public function setLogin($login){
			$this->login = $login;
		}
		public function setLlegada($llegada){
			$this->llegada = $llegada;
		}
		public function setSalida($salida){
			$this->salida = $salida;
		}
		public function setAdultos($adultos){
			$this->adultos = $adultos;
		}
		public function setChildren($children){
			$this->children = $children;
		}
		public function setServicio($servicio){
			$this->servicio = $servicio;
		}
		public function setPago($pago){
			$this->pago = $pago;
		}


		//ZONA DE GETTERS
		public function getIdHab(){
			return $this->idHab;
		}
		public function getTipoHab(){
			return $this->tipoHab;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getLlegada(){
			return $this->llegada;
		}
		public function getSalida(){
			return $this->salida;
		}
		public function getAdultos(){
			return $this->adultos;
		}
		public function getChildren(){
			return $this->children;
		}
		public function getServicio(){
			return $this->servicio;
		}
		public function getPago(){
			return $this->pago;
		}
	}
?>
<?php
	class Usuario {
		private $login;
		private $pass;
		private $correo;
		private $dni;
		private $nombre;
		private $apellidos;
		private $direccion;
		private $telefono;

		//ZONA DE CONSTRUCTOR POR DEFECTO
		public function __construct(){
			$this->login = "";
			$this->pass = "";
			$this->correo = "";
			$this->dni = "";
			$this->nombre = "";
			$this->apellidos = "";
			$this->direccion = "";
			$this->telefono = "";
		}
		//ZONA DE SETTERS
		public function setLogin($login){
			$this->login = $login;
		}
		public function setPass($pass){
			$this->pass = $pass;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function setDni($dni){
			$this->dni = $dni;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		//ZONA DE GETTERS
		public function getLogin(){
			return $this->login;
		}
		public function getPass(){
			return $this->pass;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function getDni(){
			return $this->dni;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getApellidos(){
			return $this->apellidos;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
	}
?>
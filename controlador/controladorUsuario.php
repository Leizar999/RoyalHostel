<?php 
	class ControladorUsuario {
		private $usuario;


		public function __construct($usuario){
			$this->usuario = $usuario;
		}

		public function leerDatosLogin($login, $pass){
			$this->usuario->setLogin($login);
			$this->usuario->setPass($pass);
		}

		public function leerDatosCompletos($login, $pass, $correo, $nombre, $apellidos, $dni, $telefono, $direccion){
			$this->usuario->setLogin($login);
			$this->usuario->setPass($pass);
			$this->usuario->setCorreo($correo);
			$this->usuario->setNombre($nombre);
			$this->usuario->setApellidos($apellidos);
			$this->usuario->setDni($dni);
			$this->usuario->setTelefono($telefono);
			$this->usuario->setDireccion($direccion);
		}
	}
?>
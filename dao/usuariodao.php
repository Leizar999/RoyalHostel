<?php
	class UsuarioDAO {
		private $usuario;

		public function __construct($usuario){
			$this->usuario = $usuario;
		}

		public static function getUsuario($login){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM usuarios WHERE login = '$login';";
			$resultado = $bbdd->consulta($sql);
			$usuario = new Usuario();

			if($bbdd->numFilas($resultado) > 0){
				$fila = $bbdd->fetch($resultado);
				$usuario->setLogin($fila["login"]);
				$usuario->setPass($fila["pass"]);
				$usuario->setCorreo($fila["correo"]);
				$usuario->setDni($fila["dni"]);
				$usuario->setNombre($fila["nombre"]);
				$usuario->setApellidos($fila["apellidos"]);
				$usuario->setDireccion($fila["direccion"]);
				$usuario->setTelefono($fila["telefono"]);
			}

			return $usuario;
		}

		public static function getUsuarios(){
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM usuarios;";
			$resultado = $bbdd->consulta($sql);

			return $resultado;
		}

		public function checkLogin(){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM usuarios WHERE BINARY login = '" . $this->usuario->getLogin() . "' AND BINARY pass = '" . $this->usuario->getPass() . "';";
			$resultado = $bbdd->consulta($sql);

			if($bbdd->numFilas($resultado) > 0){
				$valido = true;
			}

			return $valido;
		}

		public function checkEmail($email){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "SELECT * FROM usuarios WHERE BINARY correo = '$email';";
			$resultado = $bbdd->consulta($sql);

			$resultados = array();
			$fila = mysqli_fetch_assoc($resultado);

			if($bbdd->numFilas($resultado) > 0){
				$valido = true;
				$resultados[1] = $fila["login"];
				$resultados[2] = $fila["pass"];
			}

			$resultados[0] = $valido;

			return $resultados;
		}

		public function insertarUsuario(){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "INSERT INTO usuarios (login, pass, correo, dni, nombre, apellidos, direccion, telefono) VALUES ('" . $this->usuario->getLogin() . "', '" . $this->usuario->getPass() . "', '" . $this->usuario->getCorreo() . "', '" . $this->usuario->getDni() . "', '" . $this->usuario->getNombre() . "', '" . $this->usuario->getApellidos() . "', '" . $this->usuario->getDireccion() . "', '" . $this->usuario->getTelefono() . "')";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public static function fetchUsuario($cursor){
			$bbdd = BD::getInstancia();
			return $bbdd->fetch($cursor);
		}

		public function actualizarUsuario($login, $columna, $valor){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "UPDATE usuarios SET $columna = '$valor' WHERE login = '$login'";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}

		public function borrarUsuario($login){
			$valido = false;
			$bbdd = BD::getInstancia();
			$bbdd->establecerUTF8();
			$sql = "DELETE FROM usuarios WHERE login = '$login'";

			$resultado = $bbdd->consulta($sql);

			if($sql){
				$valido = true;
			}

			return $valido;
		}
	}
?>
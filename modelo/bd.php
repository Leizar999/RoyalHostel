<?php
	
	class BD{

		private $servidor;
		private $usuario;
		private $contrasenia;
		private $bbdd;
		private $conexion;
		private static $instancia;

		private function __construct(){
			$this->servidor = "localhost";
			$this->usuario = "root";
			$this->contrasenia = "";
			$this->bbdd = "royalhostel";
			$this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->bbdd) or die("Problemas en la conexion: " . mysqli_error($this->conexion));
			self::$instancia = null;
		}

		public static function getInstancia(){
			if(is_null(self::$instancia)){
				self::$instancia = new self;
			}
			return self::$instancia;
		}

		public function getConexion(){
			return $this->conexion;
		}

		public function establecerUTF8(){
			$this->conexion->set_charset("utf8") or die("Problemas al cambiar el conjunto de caracteres a UTF-8: " . mysqli_error($this->conexion));
		}

		public function consulta($query){
			$resultado = $this->conexion->query($query) or die("Error en la consulta SQL: " . mysqli_error($this->conexion));
			return $resultado;
		}

		public function numFilas($resultado){
			$cuantas = mysqli_num_rows($resultado);
			return $cuantas;
		}

		public function fetch($resultado){
			return $resultado->fetch_assoc();
		}

		public function cerrarConexion(){
			$this->conexion->close() or die("Error al cerrar la conexión: " . mysqli_error($this->conexion));
			self::$instancia = null;
		}

		public function errorActualizacion(){
			die('No se pudieron actualizar los datos: ' . mysqli_error($this->conexion));
		}

		public function sanear($texto_a_sanear){
			return $this->conexion->real_escape_string($texto_a_sanear);
		}
	}
?>
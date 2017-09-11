<?php
	class Servicio {
		private $tipo;
		private $descripcion;
		private $precio;

		//ZONA DE CONSTRUCTOR POR DEFECTO
		public function __construct(){
			$this->tipo = "";
			$this->descripcion = "";
			$this->precio = "";
		}
		//ZONA DE SETTERS
		public function setId($id){
			$this->id = $id;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}

		//ZONA DE GETTERS
		public function getId(){
			return $this->id;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function getPrecio(){
			return $this->precio;
		}
	}
?>
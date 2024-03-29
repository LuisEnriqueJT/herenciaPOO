<?php
	abstract class Futbolista{
		private $nombre;
		private $apellido;
		private $dorsal;

		abstract public function celebrar();

		public function	__construct($nombre, $apellido, $dorsal){
			$this->nombre = $nombre;
			$this->apellido	 = $apellido;
			$this->dorsal = $dorsal;
		}

		public function setNombre($nombre){
			$this->nombre=$nombre;
		}		

		public function setApellido($apellido){
			$this->apellido=$apellido;
		}		

		public function setDorsal($dorsal){
			$this->dorsal=$dorsal;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function getDorsal(){
			return $this->dorsal;
		}

		public function firmarContrato(){
			return "Firmar contrato por esta temporada";
		}
	}

	class Delantero extends Futbolista{
		public $goles;

		public function setGoles($goles){
			$this->goles = $goles;
		}

		public function getGoles(){
			return $this->goles;
		}

		public function anotar(){
			return "Tiro a puerta y goooool";
		}

		public function celebrar(){
			return "Corre al tiro de esquina y se reune con su equipo";
		}
	}

	class Portero extends Futbolista{
		public $atajadas;

		public function setAtajadas($atajadas){
			$this->atajadas = $atajadas;
		}

		public function getAtajadas(){
			return $this->atajadas;
		}

		public function atajar(){
			return "Atajadoooon!!";
		}

		public function celebrar(){
			return "Alza las manos al cielo y voltea a la grada";
		}
	}
?>
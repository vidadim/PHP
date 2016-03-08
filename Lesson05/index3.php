<?php 

	class Baddie{

		public static $level = 1;
		
		private $evilness = 10;

		public function getEvilness() {

			return $this->evilness;
		}

		public function setEvilness($v_evilness) {

			$this->evilness = $v_evilness;
		}

	}

	class Boss extends Baddie{

		public function getBaddieEvilness(){

			return $this->evilness;

		}

	}

	$ganon = new Baddie;

	echo Baddie::$level;


 ?>
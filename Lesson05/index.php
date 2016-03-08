<?php 

	class Baddie{

		public $evilness = 10;

		public $name;

		public function __construct($v_evilness, $v_name) {

			$this->evilness = $v_evilness;
			$this->name = $v_name;

		}

		public function __destruct() {

			echo "a ".__CLASS__." has been destroyed!</br>";

		}

		public function __toString() {
			
			return $this->name;

		}
	}	

	$ganon = new Baddie(8, "Genon");

	echo $ganon."asd";
	// unset($ganon);


	// var_dump($ganon);

 ?>
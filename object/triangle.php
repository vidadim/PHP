<?php 
	/**
	* 
	*/
	class Triangle
	{
		
		public $firstAngle;
		public $secondAngle;
		public $thirdAngle;
		public $angleSum;

		public function check()
		{
			$this->angleSum = $this->firstAngle+$this->secondAngle+$this->thirdAngle;

			if($this->angleSum==180){
				return true;
			}
			else{
				return false;
			}
		}
	}

	$firstTriangle =  new Triangle();
	$firstTriangle -> firstAngle=45;
	$firstTriangle -> secondAngle=25;
	$firstTriangle -> thirdAngle=145;

	$secondTriangle =  new Triangle();
	$secondTriangle -> firstAngle=15;
	$secondTriangle -> secondAngle=65;
	$secondTriangle -> thirdAngle=100;

	$thirdTriangle =  new Triangle();
	$thirdTriangle -> firstAngle=15;
	$thirdTriangle -> secondAngle=15;
	$thirdTriangle -> thirdAngle=150;

	$fourthTriangle =  new Triangle();
	$fourthTriangle -> firstAngle=15;
	$fourthTriangle -> secondAngle=25;
	$fourthTriangle -> thirdAngle=121;

	$triangles=[$firstTriangle,$secondTriangle,$thirdTriangle,$fourthTriangle];


	foreach ($triangles as $triangle) {
		if($triangle->check()){

			echo "
					<ul>
					Bu bir ucbucaqdir, bucaqlari:
					<li>$triangle->firstAngle</li>
					<li>$triangle->secondAngle</li>
					<li>$triangle->thirdAngle</li></ul>";			

		}
		else{
			echo "bu bir ucbucaq deyil";
		}
	}

	


 ?>
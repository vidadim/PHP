<!DOCTYPE html>
<html>
<head>
	<title>LESSON04 - PHP</title>
</head>
<body>

	<?php
		// var_dump(array)
		// length of array count(Array)

		$studentsArray = ["std0"=>["Orxan","Abbasli","22"],"std1"=>["Samir","Karimov","30"],"std2"=>["Orxan","Farmanli","22"]];

		// echo $studentsArray["std1"][0];
		// foreach ($studentsArray as $key => $value) {
		// 	echo  $key;
		// 	for ($i=0; $i < count($value) ; $i++) { 
		// 		echo $value[$i];
		// 	}
		// 	echo "<br>";
		// }
		$i=0;
		$j=0;
		while($i<count($studentsArray)){
			
			while($j<=$i){
				echo $studentsArray["std".$i][$j];
				$j++;
				if($j==3){
					break;
				}
			}
			
			$i++;
			if ($i==3){
				break;
			}
			
		}
		
	  ?>

</body>
</html>
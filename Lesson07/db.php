<?php 
	
	$server = "localhost";
	$username = "root";
	$password = "";

	$db_name = "code_first";

	//mysqli_connect() - servere goshulmaq uchun lazim olan function
	//mysqli_select_db(connection,db_name)
	$connection = mysqli_connect($server,$username,$password);

	if($connection){
		$select_db = mysqli_select_db($connection,$db_name);
		
	}
	else{
		echo "servere qoshulma bash tutmadi! ";
	}

 ?>
<?php 

	include "db.php";
	
	$c_fname = $_POST["fname"];
	$c_lname = $_POST["lname"];
	$c_pwd = $_POST["pwd"];
	$c_email = $_POST["email"];
	$c_number = $_POST["number"];
	$c_address = $_POST["address"];


	$sql = "INSERT INTO clients (c_fname,c_lname,c_mail,c_pwd,c_number,c_address) VALUES ('$c_fname','$c_lname','$c_email','$c_pwd','$c_number','$c_address')";

	$query = mysqli_query($connection,$sql);

	if($query){
		echo "elave olundu";
	}
	else{
		echo "xeta bash verdi!";
	}



 ?>
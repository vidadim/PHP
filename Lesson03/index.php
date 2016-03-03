<!DOCTYPE html>
<html>
<head>
	<title>LESSON3 - PHP</title>
</head>
<body>

	<!-- <form name="myForm" action="check.php" onsubmit="return validateForm()" method="POST">
		<fieldset>
			<legend>FORMA</legend>
			<label>Ad: <input name="fname" type="text"></input></label>
			<label>Soyad: <input name="lname" type="text"></input></label>
			<label>Yas: <input  name="age" type="text"></input></label>
			<input type="submit" value="gonder"></input>
		</fieldset>
	</form> -->

	<?php 
		define("title1", "Code Academy");

		function myFunc(){
			echo title1;
		}

		myFunc();
		
	 ?>
</body>
</html>
<script type="text/javascript">
	

	// function validateForm() {
	// 	var fname = document.forms['myForm']['fname'].value;
	// 	var lname = document.forms['myForm']['lname'].value;
	// 	var age = document.forms['myForm']['age'].value;
		
	// 	if (fname==""|| lname==""||age==""){
	// 	 	alert('xanalari doldurun');
	// 	 	return false;
	// 	 }	

		
	// }

	
</script>
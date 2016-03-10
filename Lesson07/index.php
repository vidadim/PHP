<?php 

	include "db.php";

	$sql = "SELECT * FROM clients";

	$query = mysqli_query($connection,$sql);


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<style type="text/css">
	td{
		padding: 5px 10px;
		font-family: 'Calibri', sans-serif;
	}
	</style>
</head>
<body>

	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Ad</td>
				<td>Soyad</td>
				<td>e-Mail</td>
				<td>Shifre</td>
				<td>Nomre</td>
				<td>Adress</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				while($row=mysqli_fetch_assoc($query)){
					echo "<tr>";
						foreach ($row as $key => $value) {
							
							echo "<td>".$value."</td>";

						}
						
					echo "</tr>";
						
					}
			 ?>
		</tbody>
	</table>

</body>
</html>
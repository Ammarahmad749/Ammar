<?php

	$mysqli = new mysqli("localhost","root","","payroll system") or die(mysqli_error($mysqli));


	$Department_Name = '';
	if(isset($_POST['Save']))
	{
		#code... 
		$Department_Name = $_POST['Department_Name'];

		$mysqli->query("INSERT INTO department (Department_Name) VALUEs ('$Department_Name')");
	}








?>


<!DOCTYPE html>
<html>
<head>
	<title>Payroll Management</title>
</head>
<body>

	<h1>Manage Department Details</h1>

	<form method="post">
		<label>Department Name</label>
		<input type="Text" name="Name">
		<br><br>

	<button type="submit" name="Save">Submit</button>
	</form>
</body>
</html>
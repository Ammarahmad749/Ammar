<?php

	$mysqli = new mysqli("localhost","root","","payroll system") or die(mysqli_error($mysqli));
	$First_Name = '';
	$Last_Name = '';
	$Address = '';
	$Email_ID = '';
	$Department_num = '';
	$Project_num = '';
	$S_ID = '';

	if (isset($_POST['Save'])) {
		# code...
		$First_Name = $_POST['First_Name'];
		$Last_Name = $_POST['Last_Name'];
		$Address = $_POST['Address'];
		$Email_ID = $_POST['Email_ID'];
		$Department_num = $_POST['DNO'];
		$Project_num = $_POST['PNO'];
		$S_ID = $_POST['Designation'];
		$mysqli->query("INSERT INTO employee (F_name, L_name, Address, Email_ID, Department_num,Project_num,Salary_ID) VALUES ('$First_Name','$Last_Name','$Address','$Email_ID','$Department_num','$Project_num','$S_ID')");


	}

?>


<!DOCTYPE html
<html>
<head>
	<title>EMPLOYEE DETAILS</title>

</head>
<body>
	<h1>ADD RECORD</h1>


	<form method="post">

		<label>First Name</label>
		<input type="text" name="First_Name">
		<br><br>
		<label>Last Name</label>
		<input type="text" name="Last_Name">
		<br>
		<br>
		<label>Address</label>
		<input type="text" name="Address">
		<br><br>
		<label>Email ID</label>
		<input type="text" name="Email_ID">
		<br><br>
		<label>Department Name</label>
		<input type="text" name="DNO">
		<br><br>
		<label>Project Name</label>
		<input type="text" name="PNO">
		<br><br>
		<label>Designation</label>
		<input type="text" name="Designation">
		<br><br>

	<button type="submit" name="Save">submit</button>
	</form>

</body>
</html>
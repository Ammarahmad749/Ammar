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
		$Department_num = $_POST['Department_num'];
		$Project_num = $_POST['Project_num'];
		$S_ID = $_POST['S_ID'];
		$mysqli->query("INSERT INTO ");

	}











?>

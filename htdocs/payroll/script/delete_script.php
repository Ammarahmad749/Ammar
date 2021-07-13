<?php
	include "connection.php";
	$sql1 = "DELETE FROM employee WHERE id=".$_GET['id'].";";
	
	$sql2 = "DELETE FROM salary WHERE fk_empid=".$_GET['id'];
	$sql3 = "DELETE FROM wage WHERE fk_empid=".$_GET['id'];


	$result1 = $conn->query($sql1);
	$result2 = $conn->query($sql2);
	$result3 = $conn->query($sql3);

	header('Location: ../employee_detail.php' );
?>
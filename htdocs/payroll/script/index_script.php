<?php 
include "connection.php";
//print_r ($_POST);
$sql = "SELECT * FROM admin 
where username = '".$_POST['username']."' and password = '".$_POST['password']."'";
$result = $conn->query($sql);
//print_r($result);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$sql1 = "UPDATE `admin` SET last_login=CURDATE() WHERE id=".$row['id'];
	$result1 = $conn->query($sql1);
	header('Location: ../dashboard.php' );
}else{
	header('Location: ../index.php?msg=error' );
}
?>
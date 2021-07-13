<?php 
include "connection.php";
// print_r($_GET);


$query = "SELECT `f_name`,`salary_type` FROM `employee` where id = ". $_GET['emp_id'];
$result = $conn->query($query);
$row = $result->fetch_assoc();
// print_r($row);

if ($row['salary_type'] == 1) {
	$query1 = "SELECT  `basic_salary`, `tax`, `medical_expense` FROM `salary` WHERE fk_empid = ". $_GET['emp_id'];
	$result1 = $conn->query($query1);
	$row1 = $result1->fetch_assoc();
	// print_r($row1);


}
elseif ($row['salary_type'] == 2) {
	$query2 = "SELECT `hour_rate` FROM `wage` WHERE fk_empid = ". $_GET['emp_id'];
	$result2 = $conn->query($query2);
	$row2 = $result2->fetch_assoc();
	// print_r($row2);
	
}

// exit();

?>
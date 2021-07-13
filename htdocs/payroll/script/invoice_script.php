<?php 
include "connection.php";
// print_r ($_POST);

$fk_empid = $_POST['emp_id'];
$query = "SELECT  `f_name`, `l_name`,  `phone`, `email` FROM `employee` WHERE id = $fk_empid";
$result = $conn->query($query);
$row = $result->fetch_assoc();
// print_r($row);
$stype = $_POST['stype'];
if ($stype == 1) {
	
	$basic = $_POST['bsalary'];
	$tax = $_POST['tax'];
	$medical_expense = $_POST['medexpense'];
	$total_deductions = $_POST['deductions'];
	$paid = ($basic + $medical_expense) - ($tax + $total_deductions);

	$salary_query = "INSERT INTO `salary_transaction`( `fk_empid`, `basic`, `tax`, `medical_expense`, `total_deductions`, `paid`, `date`) 
	VALUES ('$fk_empid','$basic','$tax','$medical_expense','$total_deductions','$paid',CURDATE())";
		$result = $conn->query($salary_query);

}
elseif ($stype == 2) {
	$hours = $_POST['hworked'];
	$hour_rate = $_POST['hrate'];
	$paid1 = $hours * $hour_rate;

		$wage_query = "INSERT INTO `wage_transaction`( `fk_empid`, `hours_worked`, `hour_rate`, `paid`, `date`) 
		VALUES ('$fk_empid','$hours','$hour_rate','$paid1',CURDATE())";
		$result1 = $conn->query($wage_query);
}

	

?>
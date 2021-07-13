<?php 
include "connection.php";
//print_r ($_POST);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$cnic = $_POST['cnic'];
$dob = $_POST['dob'];
$jdate = $_POST['jdate'];
$stype = $_POST['stype'];

$sql = "INSERT INTO `employee`( `f_name`, `l_name`, `address`, `phone`, `email`, `cnic`, `DOB`, `joining_date`, `salary_type`) 
VALUES ('$fname','$lname','$address','$phone','$email','$cnic',STR_TO_DATE('$dob', '%d/%m/%Y'),STR_TO_DATE('$jdate', '%d/%m/%Y'),$stype)";
$result = $conn->query($sql);

$sql_get = "SELECT id FROM `employee` ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql_get);
$row = $result->fetch_assoc();
$emp_id = $row['id'];
//print_r($emp_id);
if ($stype == 1) {
	$bsalary = $_POST['bsalary'];
	$tax = $bsalary*($_POST['tax']/100);
	$medexpense = $_POST['medexpense'];
	echo $tax;
	$sql_salary = "INSERT INTO `salary`(`fk_empid`, `basic_salary`, `tax`, `medical_expense`) 
	VALUES ($emp_id,$bsalary,$tax,$medexpense)";
	$result = $conn->query($sql_salary);	
}else{
	$hrate = $_POST['hrate'];
	$sql_wage = "INSERT INTO `wage`(`fk_empid`, `hour_rate`) 
	VALUES ($emp_id,$hrate)";
	$result = $conn->query($sql_wage);	
}
header('Location: ../employee_detail.php' );



?>
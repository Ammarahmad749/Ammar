<?php 
include "connection.php";
$sql1 = "SELECT s.id AS stid, e.id AS empid,e.f_name,e.l_name,s.basic,s.tax,s.medical_expense,s.total_deductions,s.paid,s.date FROM employee e , salary_transaction s WHERE e.id= s.fk_empid";
$result1 = $conn->query($sql1);
$sql2 = "SELECT e.id AS empid, w.id AS wtid, f_name,l_name, hours_worked, hour_rate, paid,date FROM employee e,wage_transaction w WHERE e.id = w.fk_empid";
$result2 = $conn->query($sql2);
?>
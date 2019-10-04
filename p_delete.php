<?php
include("config.php");
$id = $_GET['emp_id'];
$query= mysqli_query($conn,"DELETE emp,salary,dept_emp FROM emp
        INNER JOIN salary ON salary.emp_id = emp.emp_id 
        INNER JOIN dept_emp ON dept_emp.emp_id= emp.emp_id
        WHERE emp.emp_id = '$id'");
header('Location:person.php');
?>

<?php
include("config.php");
$id = $_GET['emp_id'];
$query= mysqli_query($conn,"DELETE FROM `emp` WHERE emp_id='$id'");
header('Location:person.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
include("config.php");
if(isset($_POST['submit']))
{
	$Fname = $_POST['fname'];
	$Lname = $_POST['lname'];
	$Dob = $_POST['dob'];
	$Gender = $_POST['gender'];
	$Department = $_POST['department'];
	$Manager = $_POST['manager'];
	$Joindate = $_POST['joindate'];
	$Salary = $_POST['salary'];

		$result = "INSERT INTO `emp`(`first_name`, `last_name`, `dob`, `gender`, `join_date`) VALUES ('$Fname','$Lname','$Dob','$Gender','$Joindate')";
		$conn->query($result) or die($conn->error);
		$data = $conn->insert_id;
		//echo $result;
	   // echo $data;
	    if($data)
	    {		
		$query="INSERT INTO salary (`emp_id`, `salary_amount`) VALUES ('$data','$Salary')";
        }
        $conn->query($query) or die($conn->error);    
        //echo $query;   
        if($data)
	    {		
		$query1="INSERT INTO dept_emp (`emp_id`, `dept_id`) VALUES ('$data','$Department')";
	    }
	    //echo $query1;
        $conn->query($query1) or die($conn->error);
       
        //echo $data;
        
                
	}
    
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Employee Data Add Succesfully.');
    window.location.href='person.php';
    </script>");

?>


</body>
</html>

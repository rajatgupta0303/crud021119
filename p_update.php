<?php
echo "rajat";
include_once("config.php");

 //echo "<pre>";print_r($_POST);die;
 
$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Dob = $_POST['dob'];
$Gender = $_POST['gender'];
$join_date = $_POST['joindate'];
$id = $_POST['emp_id'];
    
if(!empty($_POST['fname'])){
	
	$result = "UPDATE `emp` SET `first_name`='$Fname', `last_name`='$Lname', `dob`='$Dob', `gender`='$Gender', `join_date`='$join_date' WHERE emp_id= '$id' ";
        
        echo "UPDATE `emp` SET `first_name`='$Fname', `last_name`='$Lname', `dob`='$Dob', `gender`='$Gender', `join_date`='$join_date' WHERE emp_id= $id "; die;
                $conn->query($result) or die("error");
                       // header("Location:person.php");
	}  

?>
<?php

$id = $_GET['emp_id'];

$result = mysqli_query($conn, "SELECT emp.*, salary.salary_amount, dept_emp.dept_id,department.dept_name FROM emp INNER JOIN salary ON salary.emp_id = emp.emp_id INNER JOIN dept_emp ON dept_emp.emp_id = emp.emp_id INNER JOIN department ON department.dept_id=dept_emp.dept_id WHERE emp.emp_id='$id' ");

while($row = mysqli_fetch_array($result))
{
$Fname = $row['first_name'];
$Lname = $row['last_name'];
$Dob = $row['dob'];
$Gender = $row['gender'];
$join_date = $row['join_date'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>CRUD UPDATE OPERATION</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
</head>

<body>
 <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4>JSON CRUD</h4>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            </div>
        </div>
    </nav>
	<div></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
              
                <form method="POST" action="">
					  <h2 style="padding-top:40px;">Update New Employee</h2>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" required="required" name="fname" placeholder="First Name" value="<?php echo $Fname;?>">

                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" required="required" name="lname" placeholder="Last Name" value="<?php echo $Lname;?>">

                        <span class="help-block"></span>
                    </div>

                    <div class="form-group ">
                        <label for="inputLName">D.O.B</label>
                        <input type="text" class="form-control" required="required" name="dob" placeholder="Date Of Birth" id="datepicker" value="<?php echo $Dob;?>" >
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAge">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="">Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                        <label for="inputAge">Join Date</label>
                       <input type="text" class="form-control" required="required" id="datepicker1" name="joindate" value="<?php echo $join_date;?>" >
                        <span class="help-block" ></span>
                    </div>

                  
                   
                    <div class="form-actions">
						 	<input type="hidden" name="emp_id" value=<?php echo $id;?> > </td>
						<input type="submit" class="btn btn-primary" name="update" value="Update"></tr>
                        <a class="btn btn btn-default" href="person.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

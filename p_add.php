<?php

include_once 'config.php';
$cdd = mysqli_query($conn,"SELECT * FROM department");

//~ $subjectName = "SELECT * FROM department dept_name";

//~ $subject = mysqli_query($conn, $subjectName);

?>
     
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD NEW EMPLOYEE </title>
<!--date picker code-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
  
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>

  </script>

    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial CRUD JSON DATA</title>
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
                               <form method="POST" action="p_insert.php">
					  <h2 style="padding-top:40px;">Add New Employee</h2>
                    <div class="form-group">
                        <label>First Name</label>
                        <input autocomplete="off" type="text" class="form-control" name="fname" placeholder="First Name" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input autocomplete="off" type="text" class="form-control" name="lname" placeholder="Last Name" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group ">
                        <label for="inputLName">D.O.B</label>
                        <input autocomplete="off" type="text" class="form-control" id="datepicker" name="dob" placeholder="Date Of Birth (YYYY-MM-DD)" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Gender</label>
                        <select class="form-control" name="gender" required>
                            <option value="">Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <span class="help-block"></span>
                    </div>
              
        
              
                     <div class="form-group ">
                        <label for="inputLName">Department</label>
                       <select class="form-control" name="department" required>
                        <option>  Select Department  </option>
 
 <?php 
 while($data = mysqli_fetch_array($cdd)){ ?>
<option value="<?php echo $data['dept_id'];?>"> <?php echo $data['dept_name'];?>

</option>
<?php }?> 

 </select>
                    </div>

                     <div class="form-group">
                        <label for="inputAge">Department Manager</label>
                        <select class="form-control" name="manager" required>
                            <option value="">Manager</option>
                            <option value="M">Self</option>
                            
                        </select>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Join Date</label>
                       <input autocomplete="off" type="text" class="form-control" name="joindate" id="datepicker1" placeholder="Join Date (YYYY-MM-DD)" required>
                        <span class="help-block"></span>
                    </div>

                     <div class="form-group ">
                        <label for="inputLName">Salary</label>
                        <input autocomplete="off" type="text" class="form-control" name="salary" placeholder="Salary" required>
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-actions">
						<input type="submit" name="submit" value="Submit"></tr>
                        <a class="btn btn btn-default" href="person.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

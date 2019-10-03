<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>CRUD DISPLAY DATA OPERATION</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
	
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   JSON CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class=""><a href="index.php">Home</a></li>

     <li class=""><a href="employee.php">person</a></li>

    <li class="clr1 active"><a href="person.php">Employee</a></li>
   </ul>
  </div>
 </div>
</nav>

</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to Employee Page</h3>      
  <p>All Employee List Show Below</p>      
 </div>
</div>

<div class="container">
 <div class="btn-toolbar">
  <a class="btn btn-primary" href="p_add.php"><i class="icon-plus"></i>Join New Employee</a>
  <div class="btn-group"> </div>
 
  
 </div>
</div>

<br>
<br>
<?php
include_once 'config.php';
//$result = mysqli_query($conn,"SELECT * FROM emp");
$result = mysqli_query($conn, "SELECT emp.*, salary.salary_amount, dept_emp.dept_id,department.dept_name FROM emp 
INNER JOIN salary ON salary.emp_id = emp.emp_id
INNER JOIN dept_emp ON dept_emp.emp_id = emp.emp_id 
INNER JOIN department ON department.dept_id=dept_emp.dept_id ORDER BY emp.emp_id DESC");

?>
<div class="container">
 <div class ="row">
  <div class="col-md-12">
    <?php
if (mysqli_num_rows($result) > 0) {
?>
   <table class="table table-striped table-bordered table-hover">
   <tr>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Date Of Birth</th>
     <th>Gender</th>
     <th>Department</th>
     <th>Manager</th>
     <th>Join Date</th>
     <th>salary</th>
     <th>Action</th>
    </tr>  
    <?php
while($row = mysqli_fetch_array($result)) {
?>
  <tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["dept_name"]; ?></td>
    <td><?php echo $row["dept_manager"]; ?></td>
    <td><?php echo $row["join_date"]; ?></td>
    <td><?php echo $row["salary_amount"]; ?></td>
     <td>
      <a class="btn btn-xs btn-primary" href="pp_update.php?emp_id=<?php echo $row['emp_id'] ?>">Edit</a>
                                                   
      <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')" href="p_delete.php?emp_id=<?php echo $row['emp_id'] ?>">Delete</a>
     </td>
</tr>
<?php
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div></div></div>
<?php include("footer.php");?>

</body>
</html>

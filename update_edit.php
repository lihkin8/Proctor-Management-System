<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td ><?php include 'header.php'; ?>  </td>
	  </tr>
	  <tr height="300">
	     <td width = "220" >
	     <?php include 'nav.php'; ?>
	     </td>
<?php
$dbhost = 'localhost';
$dbuser = 'guest';
$dbpass = 'guest123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"class");
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$EmpID = $_GET["EmpID"];
$EmpID = stripslashes($EmpID);
$EmpID = mysql_real_escape_string($EmpID);
$result = mysqli_query($conn,"SELECT * FROM employee where EmpID=$EmpID");
$row = mysqli_fetch_array($result)
?>
<form action="update_emp.php" method="POST">

 <h3>Student Details:</h3>
 
		<label>Student Name : <input type = "text" name = "name" /></label><br /><br />
		<label>Student Branch : <input type = "text" name = "branch" /></label><label> &nbsp Student USN: <input type = "text" name = "usn" /></label><br /><br />
		<label>Student Contact: <input type = "text" name = "contact" /></label><br /><br />
		<label>Number of Backlogs:<input type = "text" name = "back" /></label><br /><br />
		<label>Student SGPA :<input type = "text" name = "sgpa" /></label><br /><br />
		<label>Student CGPA :<input type = "text" name = "cgpa" /></label><br /><br />
		<label>Student Email ID : <input type = "text" name = "email" /></label><br /><br />
		
		<h3>Personal Details:</h3><br/><br/>
		<label>Blood Group:<input type = "text" name = "blood" /></label> &nbsp <label> Date of Birth: <input type = "text" name = "date" /></label><br /><br />
		<label>Father:<input type = "text" name = "father" /></label> &nbsp <label>Mother:<input type = "text" name = "mother" /></label><br /><br />
		<label>Student address 1: <input type = "text" name = "addr1" /></label> &nbsp <label>Student address 2: <input type = "text" name = "addr2" /></label><br /><br />
		<label>Father number:<input type = "text" name = "fno" /></label> &nbsp <label>Phone number: <input type = "text" name = "phn" /></label><br /><br />
		    
    </body>
</html>

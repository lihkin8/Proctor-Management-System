<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td ><?php include 'header.php'; ?> </td>
	  </tr>
	  <tr height="300">
	     <td width = "100" nowrap valign="top">
	     <?php include 'nav.php'; ?>
	     </td>
	     <td >
<?php
$con=mysqli_connect("localhost","root","","admin_db");
if (mysqli_connect_errno())
  { echo "Failed to connect to MySQL: " . mysqli_connect_error();    }
$result = mysqli_query($con,"SELECT * FROM employee");
echo "<table border='1'>
<tr>
<th>EmpID</th>
<th>Name</th>
<th></th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['EmpID'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td><a href='update_edit.php?EmpID=". $row['EmpID'] ."'>". 'Update' . "</a></td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
	     </td>    
	   </tr> 
    </table>		   
	</body>
</html>

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
	     <td width="100%" height="100%"  align="left" valign="top">
<?php
$dbhost = 'localhost';
$dbuser = 'guest';
$dbpass = 'guest123';
$db_name="class"; 
$tbl_name="employee"; 
mysql_connect("$dbhost", "$dbuser", "$dbpass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


//echo "emp is:",$EmpID;
	$name = $_POST["name"];
		$v1 = $_POST["addr1"];
		$v2 = $_POST["addr2"];
		$v3 = $_POST["email"];
		$v4 = $_POST["branch"];
		$v5 = $_POST["contact"];
		$v6 = $_POST["back"];
		$v7 = $_POST["sgpa"];
		$v8 = $_POST["cgpa"];
		$v9 = $_POST["blood"];
		$v10 = $_POST["date"];
		$v11 = $_POST["father"];
		$v12 = $_POST["mother"];
		$v13 = $_POST["fno"];
		$v14 = $_POST["phn"];
		$v15 = $_POST["usn"];
	$sql = "UPDATE employee SET name = " ."'".$v1."'".", addr1 = $v2, addr2= " ."'".$v3."'".", email = " ."'".$v4."'".", branch = $v5, contact= " ."'".$v6."'".", back = " ."'".$v7."'".", sgpa = $v8, cgpa= " ."'".$v9."'".", blood = " ."'".$v10."'".", date = $v11, father= " ."'".$v12."'".",  WHERE USN = $usn";
//echo $sql;
$res = mysql_query($sql);
if($res) {
		echo "A record has been updated.";
	} else {
		printf ("Could not update record: %s\n", mysql_error());
	}
?>
 </td>    
	   </tr>
	       </table>	  
	</body>
</html>

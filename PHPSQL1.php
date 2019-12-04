<html>
	<body>
		<?php
		//$conn = mysql_connect("localhost","guest","guest123");
		//mysql_select_db("class",$conn);

		$conn = mysqli_connect("localhost","guest","guest123","class");
		
		$name = $_POST["name"];
		$addr1 = $_POST["addr1"];
		$addr2 = $_POST["addr2"];
		$email = $_POST["email"];
		$branch = $_POST["branch"];
		$contact = $_POST["contact"];
		$back = $_POST["back"];
		$sgpa = $_POST["sgpa"];
		$cgpa = $_POST["cgpa"];
		$blood = $_POST["blood"];
		$date = $_POST["date"];
		$father = $_POST["father"];
		$mother = $_POST["mother"];
		$fno = $_POST["fno"];
		$phn = $_POST["phn"];
		$usn = $_POST["usn"];
	 
$query = "INSERT INTO employee (ID, name, branch, usn, contact, back, sgpa, cgpa, email, blood, date, father, mother, addr1, addr2, fno, phn) VALUES (NULL,'$name','$branch','$usn','$contact','$back','$sgpa','$cgpa','$email','$blood','$date','$father','$mother','$addr1','$addr2','$fno','$phn')";
//mysql_query($query,$conn) or die(mysql_error($conn));

mysqli_query($conn,$query) or die(mysqli_error($conn));

		?>

<form action = "PHPdisp1.php" method = "POST">
<label>Enter name to search for : <input type = "text" name = "search" />
</label>
<br />
<input type = "submit" />
</form>
	</body>
</html>


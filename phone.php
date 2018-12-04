<!DOCTYPE html>
<html>
<head>
<title>Matthew's Emporium</title>
</head>
<body>
<?php
	include 'connectdb.php'
?>
<h1>Phone number updated</h1>
<ol>
<?php
	$custid=$_POST["custid"];
	$phone=$_POST["phone"];
	$query='UPDATE customer SET phone=("' . $phone . '") WHERE customerid=("' . $custid . '")';
	$result=mysqli_query($connection,$query);
	if(!mysqli_query($connection,$query)){
		die("database query failed.");
	}
	echo "phone updated!";
	mysqli_close($connection);
?>
</ol>
</body>
</html>

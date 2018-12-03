<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Matthew's Emporium</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1>New Customer</h1>
<ol>
<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$city=$_POST["city"];
	$phone=$_POST["phone"];
	$queryMax='SELECT max(customerid) AS maxid FROM customer';
	$result=mysqli_query($connection,$queryMax);
	if(!$result){
		die("database max query failed.");
	}
	$row=mysqli_fetch_assoc($result);
	$newkey=intval($row["maxid"])+1;
	$custid=(string)$newkey;
	$query = 'INSERT INTO customer VALUES("' . $custid . '","' . $fname . '","' . $lname . '","' . $city . '","' . $phone . '")';
	if (!mysqli_query($connection, $query)) {
        	die("Error: insert failed" . mysqli_error($connection));
    	}
   	echo "Customer added!";
   	mysqli_close($connection);
?>
</ol>
</body>
</html>

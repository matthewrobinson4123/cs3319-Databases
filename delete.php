<!DOCTYPE html>
<html>
<head>
<title>Matthew's Emporium</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1>Deleted customer</h1>
<ol>
<?php
	$custid=$_POST["custid"];
	$query1='DELETE FROM purchase WHERE customerid="' . $custid . '"';
        if(!mysqli_query($connection, $query1)){
                die("database query failed.");
        }
	$query='DELETE FROM customer WHERE customerid="' . $custid . '"';
	if(!mysqli_query($connection, $query)){
		die("database query failed.");
	}
	echo "Customer deleted";
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>

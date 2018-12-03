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
<h1>Welcome to Matthew's Emporium</h1>
<h2>Customers:</h2>
<form action="customer.php" method="post">
<?php
	include 'customer.php';
?>
<input type ="submit" value="Get Customer">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>

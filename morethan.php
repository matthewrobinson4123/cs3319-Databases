<!DOCTYPE html>
<html>
<head>
<title>Matthew's Emporium</title>
</head>
<body>
<?php 
	include 'connectdb.php';
?>
<h1>Customers Who Purchased a Greater Quantity</h1>
<ol>
<?php
	$quantity=$_POST["quantity"];
	$query='SELECT DISTINCT * FROM customer,purchase,product WHERE customer.customerid=purchase.customerid AND product.productid=purchase.productid AND purchase.quantity > "' . $quantity . '"'; 
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo'<li>';
		echo $row["fname"] . " " . $row["lname"] . ", " . $row["description"] . ", Amount: " . $row["quantity"];
	}
	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>

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
<h1>Total Purchases for Selected Product</h1>
<ol>
<?php
	$prodid=$_POST["prodid"];
	$query='SELECT DISTINCT SUM(purchase.quantity) AS quantity, product.description, product.price FROM product, purchase WHERE purchase.productid="' . $prodid . '" AND purchase.productid=product.productid';
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("database query failed.");
	}
	
	$row=mysqli_fetch_assoc($result);
	$totprice = $row["price"] * $row["quantity"];
	
	echo $row["quantity"] . " " . $row["description"] . " were purchased at a price of $" . $totprice;
	
	mysqli_close($connection);
?>
</ol>
</body>
</html>

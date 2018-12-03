<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Matthew's Emporium-Purchases</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1>Purchased:</h1>
<ol>
<?php
	$whichCustomer= $_POST["custid"];
	$query= 'SELECT * FROM product WHERE product.productid IN (SELECT productid FROM purchase WHERE purchase.customerid ="' . $whichCustomer . '")';
	$result=mysqli_query($connection, $query);
	if(!$result){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo'<li>';
		echo $row["description"];
	}
	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>

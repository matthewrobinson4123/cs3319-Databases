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
<form action="purchases.php" method="post">
<?php
	include 'customer.php';
?>
<input type="submit" value="Get Purchases">
</form>
<p>
<hr>
<p>
<h2>Products:</h2>
<form action="listprod.php" method="post">
<input type="radio" name="format" value="dd"> Descending Description<br>
<input type="radio" name="format" value="ad"> Ascending Description<br>
<input type="radio" name="format" value="dp"> Descending Price<br>
<input type="radio" name="format" value="ap"> Ascending Price<br>
<input type="submit" value="List Products">
</form>
<p>
<hr>
<p>
<h2>Add Purchase:</h2>
<form action="addpur.php" method="post">
For which customer: <br>
<?php
	include 'customer.php';
?>
What product: <br>
<?php
	include 'product.php';
?>
Quantity: <input tpye="text" name="quantity"><br>
<input type="submit" value="Add Purchase">
</form>
<p>
<hr>
<p>
<h2>Add Customer:</h2>
<form action="addcust.php" method="post">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
City: <input type="text" name="city"><br>
Phone Number: <input type="text" name="phone"><br>
<input type="submit" value="Add Customer">
</form>
<p>
<hr>
<p>
<h2>Update Phone Number:</h2>
<form action="phone.php" method="post">
For which customer: <br>
<?php
	include 'customer.php';
?>
New Phone Number: <input type="text" name="phone"><br>
<input type="submit" value="Select Customer">
</form>
<p>
<hr>
<p>
<h2>Delete Customer:</h2>
<form action="delete.php" method="post">
<?php
	include 'customer.php';
?>
<input type="submit" value="Delete Customer">
</form>
<p>
<hr>
<p>
<h2>Who bought quantities greater than:</h2>
<form action="morethan.php" method="post">
Quantity: <input type="text" name="quantity"><br>
<input type="submit" value="Punch it Chewie">
</form>
<p>
<hr>
<p>
<h2>Never Been Purchased</h2>
<?php
	include 'never.php';
?>
<p>
<hr>
<p>
<h2>Total Purchases:</h2>
<form action="total.php" method="post">
<?php
	include 'product.php';
?>
<input type="submit" value="Total Purchases">
</form>
<?php
	mysqli_close($connection);
?>
</body>
</html>

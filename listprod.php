<!DOCTYPE html>
<html>
<head>
<meta charset "utf-8">
<title>Matthew's Emporium-Products</title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1>List of Products</h1>
<ol>
<?php
	$format = $_POST["format"];
	if($format == 'dd'){
		$query='SELECT * FROM product ORDER BY description DESC';
	}
	elseif($format == 'ad'){
		$query='SELECT * FROM product ORDER BY description ASC';
	}
	elseif($format == 'dp'){
                $query='SELECT * FROM product ORDER BY CAST(price AS DECIMAL(10,2)) DESC';
        }
	elseif($format == 'ap'){
                $query='SELECT * FROM product ORDER BY CAST(price AS DECIMAL(10,2)) ASC';
        }
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo '<li>';
		echo $row["description"] . ", $" . $row["price"];
	}
	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>

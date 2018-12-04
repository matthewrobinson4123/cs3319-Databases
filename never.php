<?php
	$query='SELECT * FROM product WHERE productid NOT IN (SELECT productid FROM purchase)';
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("database query failed.");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo "<ol>";
		echo $row["description"];
		echo "</ol>";
	}
	mysqli_free_result($result);
?>

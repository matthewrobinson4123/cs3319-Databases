<?php
	$query="SELECT * FROM customer ORDER BY lname";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("databases query failed.");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo '<input type="radio" name="custid" value="';
		echo $row["customerid"];
		echo '">' . $row["fname"] . " " . $row["lname"] . ", " . $row["city"] . ", " . $row["phone"] . ", ID: " . $row["customerid"] . "<br>";
	}
	mysqli_free_result($result);
?>

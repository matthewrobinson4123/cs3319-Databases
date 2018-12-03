<?php
$query="SELECT * FROM customer";
$result=mysqli_query($connection,$query);
if(!$result){
	die("databases query failed.");
}
echo "<ol>";
while($row=mysqli_fetch_assoc($result)){
	echo $row;
}
mysqli_free_result($result);
echo "</ol>";
?>

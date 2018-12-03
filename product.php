<?php
        $query="SELECT * FROM product ORDER BY description";
        $result=mysqli_query($connection,$query);
        if(!$result){
                die("databases query failed.");
        }
        while($row=mysqli_fetch_assoc($result)){
        	echo '<input type="radio" name="prodid" value="';
                echo $row["productid"];
                echo '">' . $row["description"] . ", $" . $row["price"] . ", IN STOCK:" . $row["stock"] . ", ID:" . $row["productid"] . "<br>";
        }
	mysqli_free_result($result);
?>


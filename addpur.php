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
<h1>New Purchase:</h1>
<ol>
<?php
        $custid=$_POST["custid"];
        $prodid=$_POST["prodid"];
        $quantity=$_POST["quantity"];
        $query = 'INSERT INTO purchase VALUES("' . $quantity . '","' . $custid . '","' . $prodid . '")';
        if (!mysqli_query($connection, $query)) {
                die("Error: insert failed" . mysqli_error($connection));
        }
        echo "Purchase added!";
        mysqli_close($connection);
?>
</ol>
</body>
</html>


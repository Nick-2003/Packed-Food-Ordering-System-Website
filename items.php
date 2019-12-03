<!DOCTYPE html>
<html>
<head>
	<title>Lunch Items</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="additems.php" method="POST">
<select name = "sandwich">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Items WHERE FoodType = 0 ORDER BY FoodName ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["Food_ID"].'>'.$row["Food_ID"].', '.$row["FoodName"].'</option>');
}
?>
</select> <br>
<select name = "drink">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Items WHERE FoodType = 1 ORDER BY FoodName ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["Food_ID"].'>'.$row["Food_ID"].', '.$row["FoodName"].'</option>');
}
?>
</select> <br>
<select name = "snack">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Items WHERE FoodType = 2 ORDER BY FoodName ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["Food_ID"].'>'.$row["Food_ID"].', '.$row["FoodName"].'</option>');
}
?>
</select> <br>
<input type="submit" value="Add Items">
</form>
<TABLE width="100%" border="2" cellpadding="10" cellspacing="2">
    <TBODY>
        <TR>
            <TD><p><a href="http://localhost/Packed-Food-Ordering-System-Website/food.php">Add Food</a></p></TD>
			<TD><p><a href="http://localhost/Packed-Food-Ordering-System-Website/orders.php">Add Order</a></p></TD>
			<TD><p><a href="http://localhost/Packed-Food-Ordering-System-Website/">Homepage</a></p></TD>
        </TR>
    </TBODY>
</TABLE>
</body>
</html>
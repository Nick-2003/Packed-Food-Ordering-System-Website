<!DOCTYPE html>
<html>
<head>
	<title>Lunch Items</title>
</head>
<body>
<form action="additems.php" method="post">
<select name = "sandwich">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Items WHERE FoodType = 0 ORDER BY FoodName ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["FoodID"].'>'.$row["FoodType"].', '.$row["FoodName"].'</option>');
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
echo('<option value='.$row["FoodID"].'>'.$row["FoodType"].', '.$row["FoodName"].'</option>');
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
echo('<option value='.$row["FoodID"].'>'.$row["FoodType"].', '.$row["FoodName"].'</option>');
}
?>
</select> <br>
Order Name:<input type="text" name="ordername"><br>
<input type="submit" value="Add Items">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Lunch Items</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Lunch Items</h1>
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
</select><br>
<p> Order Number:
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT DISTINCT OrderNumber FROM OrderNum ORDER BY OrderNumber ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["OrderNumber"].'>'.$row["OrderNumber"].'</option>');
}
?>
</p>
<input type="submit" value="Add Items">
</form>
<p><a href="/Packed-Food-Ordering-System-Website/orders.php" class="button">Add Order</a></p>
<p><a href="/Packed-Food-Ordering-System-Website/food.php" class="button">Add Food</a></p>
<p><a href="/Packed-Food-Ordering-System-Website/" class="button">Homepage</a></p>
</body>
</html>
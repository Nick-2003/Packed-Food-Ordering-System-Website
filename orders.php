<!DOCTYPE html>
<html>
<head>
	<title>Lunch Orders</title>
</head>
<body>
<form action="addorder.php" method="post">
<select name = "pupil">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Pupil ORDER BY Surname ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["Pupil_ID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
}
?>
</select>
<select name = "order">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM LunchItems ORDER BY Food_ID ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["Order_ID"].'>'.$row["Food_ID"].'</option>');
}
?>
</select>
Collection Date:<input type="date" name="collectiondate"><br>
Collection Time:<input type="time" name="collectiontime"><br>
Food Prepared:<select name="foodprepared">
		<option value="N">No</option>
		<option value="Y">Yes</option>
	</select>
Food Collected:<select name="foodcollected">
		<option value="N">No</option>
		<option value="Y">Yes</option>
	</select>
<input type="submit" value="Add Order">
</form>
</body>
</html>
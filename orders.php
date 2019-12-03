<!DOCTYPE html>
<html>
<head>
	<title>Lunch Orders</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="addorders.php" method="post">
<select name = "pupil">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Pupil ORDER BY PupilSurname ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["Pupil_ID"].'>'.$row["PupilSurname"].', '.$row["PupilForename"].'</option>');
}
?>
</select>
<select name = "order">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT DISTINCT Order_ID FROM LunchItems ORDER BY Order_ID ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo('<option value='.$row["Order_ID"].'>'.$row["Order_ID"].'</option>');
}
?>
</select>
<br>
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
<br>
<input type="submit" value="Add Order">
</form>
<TABLE width="100%" border="2" cellpadding="10" cellspacing="2">
    <TBODY>
		<TR>
			<TD><p><a href="http://localhost/Packed-Food-Ordering-System-Website/pupil.php">Add Pupil</a></p></TD>
			<TD><p><a href="http://localhost/Packed-Food-Ordering-System-Website/items.php">Add Items</a></p></TD>
			<TD><p><a href="http://localhost/Packed-Food-Ordering-System-Website/">Homepage</a></p></TD>
		</TR>
    </TBODY>
</TABLE>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Add Lunch Items</title>
</head>
<body> 
<?php
header("Refresh:2; url= items.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
	$stmt = $conn->prepare("INSERT INTO lunchitems (OrderID,FoodID)VALUES (:orderid,:foodid)");
	$stmt->bindParam(':orderid', $_POST["order"]);
	$stmt->bindParam(':foodid', $_POST["food"]);
	$stmt->execute();
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
$conn=null;
?>
</body>
</html>
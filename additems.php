<!DOCTYPE html>
<html>
<head>
	<title>Add Lunch Items</title>
</head>
<body> 
<?php
//header("Refresh:2; url= items.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$stmt = $conn->prepare("SELECT * FROM OrderNum");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
include_once('connection.php');
array_map("htmlspecialchars", $_POST);
try{
	$stmt = $conn->prepare("INSERT INTO LunchItems (Order_ID,Food_ID)VALUES (:orderid,:foodid)");
	$stmt->bindParam(':orderid', $number);
	$stmt->bindParam(':foodid', $_POST["sandwich"]);
	$stmt->execute();
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
try{
	$stmt = $conn->prepare("INSERT INTO LunchItems (Order_ID,Food_ID)VALUES (:orderid,:foodid)");
	$stmt->bindParam(':orderid', $number);
	$stmt->bindParam(':foodid', $_POST["drink"]);
	$stmt->execute();
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
try{
	$stmt = $conn->prepare("INSERT INTO LunchItems (Order_ID,Food_ID)VALUES (:orderid,:foodid)");
	$stmt->bindParam(':orderid', $number);
	$stmt->bindParam(':foodid', $_POST["snack"]);
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

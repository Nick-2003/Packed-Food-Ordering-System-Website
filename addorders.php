<!DOCTYPE html>
<html>
<head>
	<title>Adding Orders</title>
</head>
<body> 
<?php
header("Refresh:2; url= orders.php");
echo $_POST["collectiondate"]."<br>";
echo $_POST["collectiontime"]."<br>";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
	$stmt = $conn->prepare("INSERT INTO LunchOrder(Pupil_ID,Order_ID,CollectionDate,CollectionTime,FoodPrepared,FoodCollected)VALUES (:pupilid,:orderid,collectiondate,collectiontime,NULL,NULL)");
	$stmt->bindParam(':pupilid', $_POST["pupil"]);
	$stmt->bindParam(':orderid', $_POST["order"]);
	$stmt->bindParam(':collectiondate', $_POST["collectiondate"]);
	$stmt->bindParam(':collectiontime', $_POST["collectiontime"]);
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

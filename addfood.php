<!DOCTYPE html>
<html>
<head>
<title>Adding Food</title>
</head>
<body> 
<?php
//header('Location: food.php');
echo $_POST["foodtype"]."<br>";
echo $_POST["foodname"]."<br>";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
	switch($_POST["foodtype"]){
		case "Sandwich":
			$role=0;
			break;
		case "Drink":
			$role=1;
			break;
		case "Snack":
			$role=2;
			break;
	}
$stmt = $conn->prepare("INSERT INTO Items (Food_ID,FoodType,FoodName)VALUES (NULL,:foodtype,:foodname)");
$stmt->bindParam(':foodtype', $role);
$stmt->bindParam(':foodname', $_POST['foodname']);
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
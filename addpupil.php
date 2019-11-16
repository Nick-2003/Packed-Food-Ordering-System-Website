<!DOCTYPE html>
<html>
<head>
<title>Adding Pupil</title>
</head>
<body> 
<?php
header('Location: pupil.php');
echo $_POST["forename"]."<br>";
echo $_POST["surname"]."<br>";
echo $_POST["house"]."<br>";
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
	$stmt = $conn->prepare("INSERT INTO Pupil
	(ID,Surname,Forename,House)VALUES (NULL,:surname,:forename,:house)");
	$stmt->bindParam(':forename', $_POST['forename']);
	$stmt->bindParam(':surname', $_POST['surname']);
	$stmt->bindParam(':house', $_POST['house']);
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
<!DOCTYPE html>
<html>
<head>
<title>Lunch Order</title>
</head>
<body> 
<?php
array_map("htmlspecialchars", $_POST)
echo $_POST["forename"]."<br>";
echo $_POST["surname"]."<br>";
echo $_POST["ID"]."<br>";
echo $_POST["house"]."<br>";
$stmt = $conn->prepare("INSERT INTO Pupil
(ID,Surname,Forename,House) VALUES (null,:surname,:forename,:house)");
$stmt->bindParam(':forename', $_POST[“forename”]);
$stmt->bindParam(':surname', $_POST[“surname”]);
$stmt->bindParam(':ID', $_POST[“ID”]);
$stmt->bindParam(':house', $_POST[“house”]);
$stmt->execute();
$conn=null;
?>
</body>
</html>
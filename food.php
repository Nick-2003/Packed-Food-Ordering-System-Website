<!DOCTYPE html>
<html>
<head>
    <title>Food Selection</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="addfood.php" method = "POST">
<input type="radio" name="foodtype" value="Sandwich" checked> Sandwich<br>
<input type="radio" name="foodtype" value="Drink"> Drink<br>
<input type="radio" name="foodtype" value="Snack"> Snack<br>
Food Name:<input type="text" name="foodname"><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
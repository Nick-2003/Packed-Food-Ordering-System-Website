<!DOCTYPE html>
<html>
<head>
    <title>Food Selection</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Food Selection</h1>
<form action="addfood.php" method = "POST">
<input type="radio" name="foodtype" value="Sandwich" checked> Sandwich<br>
<input type="radio" name="foodtype" value="Drink"> Drink<br>
<input type="radio" name="foodtype" value="Snack"> Snack<br>
Food Name:<input type="text" name="foodname"><br>
<input type="submit" value="Add Food">
</form>
<p><a href="/Packed-Food-Ordering-System-Website/items.php" class="button">Add Items</a></p>
<p><a href="/Packed-Food-Ordering-System-Website/pupil.php" class="button">Add Pupil</a></p>
<p><a href="/Packed-Food-Ordering-System-Website/" class="button">Homepage</a></p>
</body>
</html>
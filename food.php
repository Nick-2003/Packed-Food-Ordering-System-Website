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
<input type="submit" value="Add Food">
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
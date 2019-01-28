?php 
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fruit Basket</title>
</head>

<body>
<p>here</p>
<?php
foreach ($fruits as $fruit)
{
	$fruit_clean = htmlspecialchars($_SESSION["fruit"]);
	echo "<li><p>$fruit_clean</p></li>";
}
?>		

<a href="Browse.php">Go back to Browse!</a>
<br>
<a href="Checkout.php">Go to checkout!</a>

</body>


</html>
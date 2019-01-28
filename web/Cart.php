<?php 
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fruit Basket</title>
</head>

<body>
<p>Your Fruit Basket:</p>
<?php
foreach ($_SESSION[fruit] as $fruit)
{
	$fruit_clean = htmlspecialchars($fruit);
	echo "<li>$fruit_clean</li>";
}
?>		

<br>
<a href="Browse.php">Go back to Browse!</a>
<br>
<a href="Checkout.php">Go to checkout!</a>

</body>


</html>
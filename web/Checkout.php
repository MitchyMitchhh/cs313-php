<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>

<body>
<p>here</p>
<?php
foreach ($fruits as $fruit)
{
	$fruit_clean = htmlspecialchars($fruit);
	echo "<li><p>$fruit_clean</p></li>";
}
?>		

<a href="Cart.php">Go back to Fruit Basket!</a>
<br>
<a href="Confirm.php">Go to confirmation!</a>

</body>


</html>
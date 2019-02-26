<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>

<body>
<p>Please enter your checkout information:</p>

<form method="POST" action="Confirmation.php">

	<label for="city">City</label>
	<input type="text" placeholder="City" id="city" name="city">
	<br />

	<label for="state">State</label>
	<input type="text" placeholder="State" id="state" name="state">
	<br />

	<label for="address"></label>
	<input type="text" placeholder="Address" id="address" name="address">
	<br />

	<input type="submit" value="Checkout">

</form>

<a href="Cart.php">Go back to Fruit Basket!</a>
<br>
<!-- <a href="Confirm.php">Go to confirmation!</a>
 -->
</body>


</html>
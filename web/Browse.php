<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="shopping.css">
		<title>Browse Fruit</title>
	</head>

	<body>
		<form method="POST" action="Add.php">
			<p>Fruit is the best, which fruit would you like to eat?:</p>

			<img class="resize" src="strawberries.jpg">
			<img class="resize" src="watermelon.jpg">
			<img class="resize" src="banana.jpg">
			<img class="resize" src="orange.jpg">
			<br />
			<p>Select the fruit you want to add to your basket!</p><br />
			<input type="checkbox" name="fruit[]" id="straw" value="straw"><label>Strawberries</label><br />
			<input type="checkbox" name="fruit[]" id="water" value="water"><label>Watermelon</label><br />
			<input type="checkbox" name="fruit[]" id="banan" value="banan"><label>Bananas</label><br />
			<input type="checkbox" name="fruit[]" id="orang" value="orang"><label>Oranges</label><br />
			<br />
			<br />
			<input type="submit" value="Submit Answers">

			<br /><br /><br />
			<a href="Cart.php">Go to your Fruit Basket!</a>
		</form>

	</body>

</html>
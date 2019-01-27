<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="shopping.css">
		<title>Browse Fruit</title>
	</head>

	<body>
		<form method="POST" action="">
			<p>Fruit is the best, which fruit would you like to eat?:</p>

			<img src="strawberries.jpg">
			<img src="watermelon.jpg">
			<img src="banana.jpg">
			<img src="orange.jpg">
			Which fruit do you want?<br />
			<input type="checkbox" name="fruit" id="straw" value="straw"><label>Strawberries</label><br />
			<input type="checkbox" name="fruit" id="water" value="water"><label>Watermelon</label><br />
			<input type="checkbox" name="fruit" id="banan" value="banan"><label>Bananas</label><br />
			<input type="checkbox" name="fruit" id="orang" value="orang"><label>Oranges</label><br />
			<br />

			<label for="comments">Comments:</label><br />
			<textarea id="comments" name="comments" rows="4" cols="50"></textarea>
			<br />
			<input type="submit" value="Submit Answers">


		</form>

	</body>

</html>
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

<p>Would you like to remove any of the items?</p>


<!-- <form action="" post="POST">
	<input type="checkbox" name="ufruit[]" id="straw" value="Strawberries"><label>Strawberries</label><br />
	<input type="checkbox" name="ufruit[]" id="water" value="Watermelon"><label>Watermelon</label><br />
	<input type="checkbox" name="ufruit[]" id="banan" value="Bananas"><label>Bananas</label><br />
	<input type="checkbox" name="ufruit[]" id="orang" value="Oranges"><label>Oranges</label><br />
	<br />
	<input type="submit" value="Remove">
</form> -->

<?
	echo "<td><a href='new_php_page.php?key=$key'>Remove Item</td>";
	
	if (array_key_exists($_POST['key'], $_SESSION['fruit'])) {
  		unset($_SESSION['fruit']);
	}
	// foreach ($_REQUEST["ufruit"] as $key) {
 //    	unset($_SESSION["fruit"][$key]);
}
?>

<br>
<a href="Browse.php">Go back to Browse!</a>
<br>
<a href="Checkout.php">Go to Checkout!</a>

</body>


</html>
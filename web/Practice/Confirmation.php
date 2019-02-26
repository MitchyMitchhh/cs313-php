<?php 
session_start();

$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);
$address = htmlspecialchars($_POST["address"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
</head>

<body>
<p>Your order confirmation:</p>

<?
foreach ($_SESSION[fruit] as $fruit)
{
	$fruit_clean = htmlspecialchars($fruit);
	echo "<li>$fruit_clean</li>";
}
?>		

<h1>Checkout Information</h1>

<p>Your city is: <? echo "$city"; ?></p>
<p>Your state is: <? echo "$state"; ?></a></p>
<p>Your address is: <? echo "$address"; ?></p>


</body>


</html>
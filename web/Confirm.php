<!-- <?php 
session_start()

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
<p>Confirm your fruit order:</p>

<?php
foreach ($_SESSION[fruit] as $fruit)
{
	$fruit_clean = htmlspecialchars($fruit);
	echo "<li>$fruit_clean</li>";
}
?>		

<h1>Checkout Information</h1>

<p>Your city is: <?=$city ?></p>
<p>Your state is: <?=$state ?></a></p>
<p>Your address is: <?=$address ?></p>

</body>


</html> -->
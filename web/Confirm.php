<?php 
session_start()
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
	echo "<li><p>$fruit_clean</p></li>";
}
?>		

</body>


</html>
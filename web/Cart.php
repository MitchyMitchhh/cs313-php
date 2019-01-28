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
	$fruit_clean = htmlspecialchars($fruit);
	echo "<li><p>$fruit_clean</p></li>";
}
?>		

</body>


</html>
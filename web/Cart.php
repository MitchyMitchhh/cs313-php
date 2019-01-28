<!DOCTYPE html>
<html>
<head>
	<title>Fruit Basket</title>
</head>

<body>

<?
foreach ($fruits as $fruit)
{
	$fruit_clean = htmlspecialchars($fruit);
	echo "<li><p>$fruit_clean</p></li>";
}
?>		

</body>


</html>
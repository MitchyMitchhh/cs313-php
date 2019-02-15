<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Game Log List</title>
</head>

<body>
<div>

<h1>Scripture Resources</h1>

<?php

$statement = $db->prepare("SELECT gamename, developer, publisher, releasedate datecompleted completiontime FROM public.game");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$gamename = $row['gamename'];
	$developer = $row['developer'];
	$publisher = $row['publisher'];
	$releasedate = $row['releasedate'];
	$datecompleted = $datecompleted['datecompleted'];
	$completiontime = $row['completiontime'];

	echo "<p><strong>$gamename $developer $publisher $releasedate $datecompleted $completiontime</strong> - \"$content\"<p>";
}
?>


</div>

</body>
</html>
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

<h1>View Game Log:</h1>

<?php

  $userId = $_SESSION["userId"];
  
    $query = $db->prepare("SELECT credits
                           FROM users
                           WHERE id = :id"); 
    //$query->bindValue(':id', $userId, PDO::PARAM_STR); 
    //$query->execute(); 
  
    //$row = $query->fetch(PDO::FETCH_ASSOC);
    //$credits = $row["credits"];
	
	if ($userId) {
	$query = $db->prepare("SELECT gamename, developer, publisher, releasedate datecompleted completiontime FROM public.game WHERE id = :id");
	$query->bindValue(':id', $userId, PDO::PARAM_STR); 
    $query->execute();
	// Go through each result
	while ($row = $query->fetch(PDO::FETCH_ASSOC))
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
	}

	echo "<p><strong>$gamename $developer $publisher $releasedate $datecompleted $completiontime</strong> - \"$content\"<p>";
	}
?>

<a href="ViewGame.php">Add More Games!</a>

</div>

</body>
</html>
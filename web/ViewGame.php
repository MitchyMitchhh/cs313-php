<!DOCTYPE html>
<html>
<head>
	<title>View Game Log List</title>
</head>

<body>
<div>

<h1>View Game Log:</h1>

<?php

	require "dbConnect.php";
	$db = get_db();
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
	// while ($row = $query->fetch(PDO::FETCH_ASSOC))
	// {
	// // The variable "row" now holds the complete record for that
	// // row, and we can access the different values based on their
	// // name
	// $gamename = $row['gamename'];
	// $developer = $row['developer'];
	// $publisher = $row['publisher'];
	// $releasedate = $row['releasedate'];
	// $datecompleted = $datecompleted['datecompleted'];
	// $completiontime = $row['completiontime'];
	// }
    $rows = $query->fetchAll();
	
	foreach($rows as $row)
    {
		$html_chunk = "<b>" . $row["gamename"] . " </b>" .
                    "<b>" . $row["developer"] . "</b>" . 
                    "<b>" . $row["publisher"] . "</b>" . 
                    "<b>" . $row["releasedate"] . "</b>" .
                    "<b>" . $row["datecompleted"] . "</b>" .
                    "\"" . $row["completiontime"] . "\" </br>";
    
    	echo $html_chunk;
	}
	echo "<p><strong>$gamename $developer $publisher $releasedate $datecompleted $completiontime</strong> - \"$content\"<p>";
?>

<a href="AddGame.php">Add More Games!</a>

</div>
</body>
</html>

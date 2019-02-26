<!DOCTYPE html>
<html>
<head>
	<title>View Game Log List</title>
</head>

<body>
<div>

<h1>View Game Log:</h1>

<?php
	
	session_start();

	require "dbConnect.php";
	$db = get_db();
	$userId = $_SESSION["userId"];

    //$query->bindValue(':id', $userId, PDO::PARAM_STR); 
    //$query->execute(); 
  
    //$row = $query->fetch(PDO::FETCH_ASSOC);
    //$credits = $row["credits"];
	if ($userId) {
		echo "hey";
	}


	if ($userId) {
		$sql = "SELECT gamename, developer, publisher, releasedate, datecompleted, completiontime FROM public.game";
		$query = $db->prepare($sql);
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
 //    	$rows = $query->fetchAll();
	
	// 	foreach($rows as $row)
 //    	{
	// 		$html_chunk = "<b>" . $row["gamename"] . " </b>" .
 //                    "<b>" . $row["developer"] . "</b>" . 
 //                    "<b>" . $row["publisher"] . "</b>" . 
 //                    "<b>" . $row["releasedate"] . "</b>" .
 //                    "<b>" . $row["datecompleted"] . "</b>" .
 //                    "\"" . $row["completiontime"] . "\" </br>";
    
 //    		echo $html_chunk;
	// 	}
	// //echo "<p><strong>$gamename $developer $publisher $releasedate $datecompleted $completiontime</strong> - \"$content\"<p>";

 //    	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	// 	{
 //  			echo ' Game Name: ' . $row['gamename'] . ' Developer: ' . $row['developer'] . ' Publisher: ' . $row['publisher'] . ' Release Date: ' . $row['releasedate'] . ' Date Completed: ' . $row['datecompleted'] . ' Time Taken to Complete: ' . $row['completiontime'] . '<br/>';
	// 	}

	// }
	// else{
	// 	$query = $db->prepare("SELECT gamename, developer, publisher, releasedate datecompleted completiontime FROM public.game");
	// 	$query->bindValue(':id', $userId, PDO::PARAM_STR); 
 //    	$query->execute();
	// 	$row = $query->fetch(PDO::FETCH_ASSOC);
 //    	$gamename = $row["gamename"];
	// }
	

?>

<a href="AddGame.php">Add More Games!</a>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>View Game Log List</title>
</head>

<body>
	<div class="container">

	<h1>View Game Log:</h1>

	<?php
		
		session_start();

		require "dbConnect.php";
		$db = get_db();
		$userId = $_SESSION["userId"];

		if ($userId) {
			$sql = "SELECT public.game.gamename, public.game.developer, public.game.publisher, public.game.releasedate, public.game.datecompleted, public.game.completiontime, public.game.rating, public.game.reccomend, public.game.comment FROM public.game WHERE public.game.userid='$userId'";
			$query = $db->prepare($sql);
	    	$query->execute();

	    	while ($row = $query->fetch(PDO::FETCH_ASSOC))
			{
				if ($row[reccomend] == 1) {
					$reccomend = "Yes";
				}
				else {
					$reccomend = "No";
				}

	  			echo ' Game Name: ' . $row['gamename'] . ' Developer: ' . $row['developer'] . ' Publisher: ' . $row['publisher'] . ' Release Date: ' . $row['releasedate'] . ' Date Completed: ' . $row['datecompleted'] . ' Time Taken to Complete: ' . $row['completiontime'] . ' Rating: ' . $row['rating'] . ' Recommend?: ' . $reccomend . ' Comment: ' . $row['comment'] . '<br/>';
			}

		}
		else{
			echo "Error: Not logged in to a registered account!";
		}
		
	?>

	<a href="AddGame.php">Add More Games!</a>

	</div>
</body>
</html>

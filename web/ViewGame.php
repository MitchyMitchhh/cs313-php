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

		?>

		<!-- <table>
 		<tr>
  		<th>Game Name</th> 
  		<th>Developer</th> 
  		<th>Publisher</th>
  		<th>Release Date</th> 
  		<th>Date Completed</th> 
  		<th>Time Taken to Complete</th>
  		<th>Rating</th> 
  		<th>Recommendation</th> 
  		<th>Extra Comments</th>
 		</tr> -->

 		<?php  
		//if ($userId) {
			$sql = "SELECT public.game.gamename, public.game.developer, public.game.publisher, public.game.releasedate, public.game.datecompleted, public.game.completiontime, public.game.rating, public.game.reccomend, public.game.comment FROM public.game WHERE public.game.userid='$userId'";
			$query = $db->prepare($sql);
	    	$query->execute();

	    	while ($row = $query->fetch(PDO::FETCH_ASSOC))
			{
				if ($row[reccomend] == 1) {
					$reccomend = "Recommended";
				}
				else {
					$reccomend = "Not Recommended";
				}

	  			echo "<table>". "<tr>". "<th>" . "Game Name:" . "</th>" . "<th>". "Developer:" . "</th>" . "<th>" . "Publisher:" . "</th>" . "<th>" . "Release Date:" . "</th>" . "<th>" . "Date Completed:" . "</th>" .  "<th>" . "Time Taken to Complete:" . "</th>" . "<th>" . "Rating:" . "</th>" . "<th>" . "Recommendation:" . "</th>" . "<th>" . "Comment:" . "</th>" . "</tr>" . "<tr>" . "<td>" . $row['gamename'] . "</td>" . "<td>" . $row['developer'] . "</td>". "<td>" . $row['publisher'] . "</td>" . "<td>" . $row['releasedate'] . "</td>". "<td>". $row['datecompleted'] . "</td>" . "<td>". $row['completiontime'] . "</td>" . "<td>" . $row['rating'] . "</td>" . "<td>" . $reccomend . "</td>" . "<td>". $row['comment'] . "<td>" . "</table>" . '<br/>';
			}
		?>

	<!-- 	//}
		//else{
		//	echo "Error: Not logged in to a registered account!";
		//}
		
	?> -->
	<br>
	<a href="AddGame.php">Add More Games!</a>

	</div>
</body>
</html>

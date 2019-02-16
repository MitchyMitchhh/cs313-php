<?php 

session_start();
// $_SESSION["firstname"] = $_POST["firstname"];
// $_SESSION["lastname"] = $_POST["lastname"];
// $_SESSION["email"] = $_POST["email"];
$_SESSION["gamename"] = $_POST["gamename"];
$_SESSION["developer"] = $_POST["developer"];
$_SESSION["publisher"] = $_POST["publisher"];
$_SESSION["releasedate"] = $_POST["releasedate"];
$_SESSION["completeddate"] = $_POST["completeddate"];
$_SESSION["completiontime"] = $_POST["completiontime"];
$_SESSION["rating"] = $_POST["rating"];
$_SESSION["reccomend"] = $_POST["reccomend"];
$_SESSION["comment"] = $_POST["comment"];

require("dbConnect.php");
$db = get_db();
try
{
	// Add the Scripture
	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO public.game(gamename, developer, publisher, releasedate, completeddate, completiontime) VALUES(:gamename, :developer, :publisher, :releasedate, :completeddate, :completiontime)';
	
	$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':gamename', $gamename);
	$statement->bindValue(':developer', $developer);
	$statement->bindValue(':publisher', $publisher);
	$statement->bindValue(':releasedate', $releasedate);
	$statement->bindValue(':completeddate', $completeddate);
	$statement->bindValue(':completiontime', $completiontime);


	$queryRating = 'INSERT INTO public.review(rating, reccomend, comment) VALUES(:rating, :reccomend, :comment)';

	$statement = $db->prepare($queryRating);

	$statement->bindValue(':rating', $rating);
	$statement->bindValue(':reccomend', $reccomend);
	$statement->bindValue(':comment', $comment);
	$statement->execute();
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: AddGame.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
?>
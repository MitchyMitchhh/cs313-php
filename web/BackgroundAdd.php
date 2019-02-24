<?php 

require 'dbConnect.php';

session_start();
// $_SESSION["firstname"] = $_POST["firstname"];
// $_SESSION["lastname"] = $_POST["lastname"];
// $_SESSION["email"] = $_POST["email"];
//$_SESSION["gamename"] = $_POST["gamename"];
// $_SESSION["developer"] = $_POST["developer"];
// $_SESSION["publisher"] = $_POST["publisher"];
// $_SESSION["releasedate"] = $_POST["releasedate"];
// $_SESSION["completeddate"] = $_POST["completeddate"];
// $_SESSION["completiontime"] = $_POST["completiontime"];
// $_SESSION["rating"] = $_POST["rating"];
// $_SESSION["reccomend"] = $_POST["reccomend"];
// $_SESSION["comment"] = $_POST["comment"];

$db = get_db();

$sqlGame = "INSERT INTO game(gamename, developer, publisher, releasedate, datecompleted, completiontime) VALUES(:gamename, :developer, :publisher, :releasedate, :datecompleted, :completiontime)";

$queryGame = $db->prepare($sqlGame);
$queryGame->bindValue(':gamename', $_POST["gamename"], PDO::PARAM_STR); 
$queryGame->bindValue(':developer', $_POST["developer"], PDO::PARAM_INT);  
$queryGame->bindValue(':publisher', $_POST["publisher"], PDO::PARAM_INT); 
$queryGame->bindValue(':releasedate', $_POST["releasedate"], PDO::PARAM_INT); 
$queryGame->bindValue(':datecompleted', $_POST["datecompleted"], PDO::PARAM_INT); 
$queryGame->bindValue(':completiontime', $_POST["completiontime"], PDO::PARAM_INT); 

$queryGame->execute(); 

$sqlReview = "INSERT INTO review(rating, reccomend, comment) VALUES(:rating, :reccomend, :comment)";


$queryReview = $db->prepare($sqlReview); 

$queryReview->bindValue(':rating', $_POST["rating"], PDO::PARAM_INT); 
$queryReview->bindValue(':reccomend', $_POST["reccomend"], PDO::PARAM_INT); 
$queryReview->bindValue(':comment', $_POST["comment"], PDO::PARAM_INT); 

$queryReview->execute(); 

header('Location: AddGame.php');
die(); 

?>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?
//echo "$gamename $developer $publisher $releasedate $completeddate $completiontime $rating $reccomend $comment";
?>
</body>
</html>

 -->

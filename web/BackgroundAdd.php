<?php 

require 'dbConnect.php';

session_start();

$userId = $_SESSION["userId"];

$db = get_db();

$sql = "SELECT public.review.id 
          FROM public.review
          WHERE public.review.id ='$userid'";
$query = $db->prepare($sql); 
$query->execute();
  
$queryResults = $query->fetch(PDO::FETCH_ASSOC); 
echo $queryResults["id"];

$sqlGame = "INSERT INTO game(gamename, developer, publisher, releasedate, datecompleted, completiontime, userid) VALUES(:gamename, :developer, :publisher, :releasedate, :datecompleted, :completiontime, $userId)";

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

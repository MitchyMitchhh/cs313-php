<?php 

require 'dbConnect.php';

session_start();

$userId = $_SESSION["userId"];

$db = get_db();

$sqlGame = "INSERT INTO game(gamename, developer, publisher, releasedate, datecompleted, completiontime, rating, reccomend, comment, userid) VALUES(:gamename, :developer, :publisher, :releasedate, :datecompleted, :completiontime, :rating, :reccomend, :comment, $userId)";

$queryGame = $db->prepare($sqlGame);
$queryGame->bindValue(':gamename', $_POST["gamename"], PDO::PARAM_STR); 
$queryGame->bindValue(':developer', $_POST["developer"], PDO::PARAM_INT);  
$queryGame->bindValue(':publisher', $_POST["publisher"], PDO::PARAM_INT); 
$queryGame->bindValue(':releasedate', $_POST["releasedate"], PDO::PARAM_INT); 
$queryGame->bindValue(':datecompleted', $_POST["datecompleted"], PDO::PARAM_INT); 
$queryGame->bindValue(':completiontime', $_POST["completiontime"], PDO::PARAM_INT);
$queryGame->bindValue(':rating', $_POST["rating"], PDO::PARAM_INT); 
$queryGame->bindValue(':reccomend', $_POST["reccomend"], PDO::PARAM_INT); 
$queryGame->bindValue(':comment', $_POST["comment"], PDO::PARAM_INT); 

$queryGame->execute(); 

header('Location: AddGame.php');
die(); 

?>

<?php 

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

$sql = "INSERT INTO game(gamename, developer, publisher, releasedate, completeddate, completiontime, rating, comment) VALUES(:gamename, :developer, :publisher, :releasedate, :completeddate, :completiontime, :rating, :comment)";

$query = $db->prepare($sql);
$query->bindValue(':gamename', $_POST["gamename"], PDO::PARAM_STR); 
$query->bindValue(':developer', $_POST["developer"], PDO::PARAM_INT);  
$query->bindValue(':publisher', $_POST["publisher"], PDO::PARAM_INT); 
$query->bindValue(':releasedate', $_POST["releasedate"], PDO::PARAM_INT); 
$query->bindValue(':completeddate', $_POST["completeddate"], PDO::PARAM_INT); 
$query->bindValue(':completiontime', $_POST["completiontime"], PDO::PARAM_INT); 
$query->bindValue(':rating', $_POST["rating"], PDO::PARAM_INT); 
$query->bindValue(':comment', $_POST["comment"], PDO::PARAM_INT); 

$query->execute(); 

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

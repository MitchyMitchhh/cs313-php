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
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?
echo "$gamename $developer $publisher $releasedate $completeddate $completiontime $rating $reccomend $comment";
?>
</body>
</html>



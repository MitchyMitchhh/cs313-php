<<?php 

session_start();
$_SESSION["fruit"] = $_POST["fruit"];
//setcookie($fruit);


header('Location: Browse.php'); /* Redirect browser */
exit()

 ?>
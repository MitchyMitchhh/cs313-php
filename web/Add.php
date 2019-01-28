<<?php 

session_start()
$fruit = $_POST["fruit"];
setcookie($fruit)


header("Browse.php"); /* Redirect browser */
exit();

 ?>
<<?php 

session_start()
$fruit = $_POST["fruit"];
setcookie($fruit)


header("Location: Browse.php"); /* Redirect browser */
exit()

 ?>
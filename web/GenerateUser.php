<?php 

	$pass = $_POST["password"];

	$passwordHash = password_hash($pass, PASSWORD_DEFAULT);


 ?>
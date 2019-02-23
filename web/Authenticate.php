<?php 
	require 'dbConnect.php';

	session_start()

	$db = get_db();

	$username = $_POST["username"];
	$pass = $_POST["password"];

	$sql = "SELECT username, password FROM user WHERE username = :username";

	$query = $db->prepare($sql);
	$query->bindvalue(":username", $username, PDO::PARAM_STR);
	$query->bindvalue(":password", $password, PDO::PARAM_STR);

	$query->execute();




	if (password_verify($pass, $passwordHash)) {
		$_SESSION["user"] = $userId    	
	} else {
    	// Wrong password
	}

?>

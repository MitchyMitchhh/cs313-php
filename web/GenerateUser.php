<?php 

	session_start(); 
	require('dbConnect.php');

	$passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$db = connectPostgres(); 
	$sql = "INSERT INTO user(username, password) VALUES(:username, '" . $passwordHash . "')"; 

	$query = $db->prepare($sql);
	$query->bindValue(':username', $_POST["username"], PDO::PARAM_STR); 
	$query->bindValue(':credits', $_POST["credits"], PDO::PARAM_INT); 
	
	$query->execute(); 
	
	header('Location: Login.php');
	
	die(); 

 ?>
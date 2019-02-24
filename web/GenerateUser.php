<?php 

	session_start(); 
	require('dbConnect.php');

	$passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$db = get_db(); 
	$sql = "INSERT INTO user(username, password) VALUES(:username, $passwordHash)"; 

	$query = $db->prepare($sql);
	$query->bindValue(':username', $_POST["username"], PDO::PARAM_STR); 
	
	$query->execute(); 
	
	header('Location: Login.php');
	
	die(); 

 ?>
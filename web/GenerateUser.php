<?php 

	session_start(); 
	require('dbConnect.php');

	$passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$db = get_db(); 
	$sql = "INSERT INTO user(loginname, password) VALUES(:loginname, '" . $passwordHash . "')"; 

	$query = $db->prepare($sql);
	$query->bindValue(':loginname', $_POST["loginname"], PDO::PARAM_STR); 
	
	$query->execute(); 
	
	header('Location: Login.php');
	
	die(); 

 ?>
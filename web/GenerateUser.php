<?php 

	session_start(); 
	require('dbConnect.php');

	$passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$db = get_db(); 
	$sql = "INSERT INTO public.user(firstname, lastname, email, loginname, password) VALUES(:firstname, :lastname, :email, :loginname, '$passwordHash')"; 

	$query = $db->prepare($sql);
	$query->bindValue(':firstname', $_POST["firstname"], PDO::PARAM_STR); 
	$query->bindValue(':lastname', $_POST["lastname"], PDO::PARAM_STR); 
	$query->bindValue(':email', $_POST["email"], PDO::PARAM_STR); 
	$query->bindValue(':loginname', $_POST["loginname"], PDO::PARAM_STR); 
	//$query->bindValue(':password', $_POST["password"], PDO::PARAM_STR); 
	
	$query->execute(); 
	
	header('Location: Login.php');
	
	die(); 

 ?>
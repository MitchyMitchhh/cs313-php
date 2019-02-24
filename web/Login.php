<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

<body>
<p>Login to your Video Game Log Account:</p>

<p>Please enter your username and passord or register a new account:</p>
<form method="POST" action="Authenticate.php">

	<label for="loginname">Username</label>
	<input type="text" placeholder="User Name" id="loginname" name="loginname">
	<br />

	<label for="password">Password</label>
	<input type="password" placeholder="Password" id="password" name="password">
	<br />

	<input type="submit" value="Submit">

</form>

<a href="CreateUser.php">Register New Account</a>
<br>
<a href="AddGame.php">Temporary Link to Add Games</a>
<br>

</body>


</html>
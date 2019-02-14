<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

<body>
<p>Login to your Video Game Log Account:</p>

<p>Please enter your username and passord or register a new account:</p>
<form method="POST" action=".php">

	<label for="username">Username</label>
	<input type="text" placeholder="User Name" id="username" name="username">
	<br />

	<label for="password">Password</label>
	<input type="assword" placeholder="Password" id="password" name="password">
	<br />

	<input type="submit" value="Submit">

</form>

<a href="CreateUser.php">Register New Account</a>
<br>

</body>


</html>
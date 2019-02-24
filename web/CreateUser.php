<!DOCTYPE html>
<html>
<head>
	<title>Add Games</title>
</head>

<body>
<p>Create Your Log Account:</p>

<form method="POST" action="GenerateUser.php">

	<label for="firstname">First Name</label>
	<input type="text" placeholder="First Name" id="firstname" name="firstname">
	<br />

	<label for="lastname">Last Name</label>
	<input type="text" placeholder="Last Name" id="lastname" name="lastname">
	<br />

	<label for="email">Email</label>
	<input type="email" placeholder="Email" id="email" name="email">
	<br />

	<label for="loginname">Username</label>
	<input type="text" placeholder="Username" id="loginname" name="loginname">
	<br />

	<label for="password">Password</label>
	<input type="text" placeholder="Password" id="password" name="password">
	<br />

	<input type="submit" value="Submit">

</form>

<a href="Login.php">Back to Login</a>
<br>

</body>


</html>
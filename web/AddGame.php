<!DOCTYPE html>
<html>
<head>
	<title>Add Games</title>
</head>

<body>
<p>Log your Video Game information:</p>

<form method="POST" action="BackgroundAdd.php">

	<label for="firstname">First Name</label>
	<input type="text" placeholder="First Name" id="firstname" name="firstname">
	<br />

	<label for="lastname">Last Name</label>
	<input type="text" placeholder="Last Name" id="lastname" name="lastname">
	<br />

	<label for="email">Email</label>
	<input type="email" placeholder="Email" id="email" name="email">
	<br />

	<label for="gamename">Game Name</label>
	<input type="text" placeholder="Game Name" id="gameName" name="gameName">
	<br />

	<label for="developer">Developer</label>
	<input type="text" placeholder="Developer" id="developer" name="developer">
	<br />

	<label for="publisher">Publisher</label>
	<input type="text" placeholder="Publisher" id="publisher" name="publisher">
	<br />

	<label for="releasedate">Release Date</label>
	<input type="date" placeholder="Release Date" id="releasedate" name="releasedate">
	<br />

	<label for="completeddate">Completed Date</label>
	<input type="date" placeholder="Completed Date" id="completeddate" name="completeddate">
	<br />

	<label for="completiontime">Completion Time</label>
	<input type="text" placeholder="Completion Time" id="completiontime" name="completiontime">
	<br />

	<label for="rating">Personal Rating</label>
	<input type="number" placeholder="Rating" id="rating" name="rating" min="1" max="10">
	<br />

	<label for="rec">Reccomend Y/N</label>
	<input type="radio" placeholder="Rec" id="rec" name="rec" value="Yes"> Yes
	<input type="radio" placeholder="Rec" id="rec" name="rec" value="No"> No
	<br />

	<label for="comment">Extra Comment</label>
	<br>
	<textarea name="Text1" cols="40" rows="5" id="comment name="comment"></textarea>
	<br />

	<input type="submit" value="Submit">

</form>

<a href="ViewGame.php">View your game list</a>
<br>

</body>


</html>
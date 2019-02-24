<!DOCTYPE html>
<html>
<head>
	<title>Add Games</title>
</head>

<body>
<p>Log your Video Game information:</p>

<form method="POST" action="BackgroundAdd.php">

	<label for="gamename">Game Name</label>
	<input type="text" placeholder="Game Name" id="gamename" name="gamename">
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

	<label for="datecompleted">Completed Date</label>
	<input type="date" placeholder="Completed Date" id="datecompleted" name="datecompleted">
	<br />

	<label for="completiontime">Completion Time</label>
	<input type="text" placeholder="Completion Time" id="completiontime" name="completiontime">
	<br />

	<label for="rating">Personal Rating</label>
	<input type="number" placeholder="Rating" id="rating" name="rating" min="1" max="10">
	<br />

	<label for="reccomend ">Reccomend Y/N</label>
	<input type="radio" placeholder="Rec" id="reccomend" name="reccomend" value="Yes"> Yes
	<input type="radio" placeholder="Rec" id="reccomend" name="reccomend" value="No"> No
	<br />

	<label for="comment">Extra Comment</label>
	<br>
	<textarea name="Text1" cols="40" rows="5" id="comment name="comment" name="comment"></textarea>
	<br />

	<input type="submit" value="Submit">

</form>

<a href="ViewGame.php">View your game list</a>
<br>

</body>


</html>
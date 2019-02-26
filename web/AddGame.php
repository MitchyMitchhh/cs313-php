<!DOCTYPE html>
<html>
<head>
	
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
    <!--Let browser know website is optimized for mobile-->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->

	<title>Add Games</title>

</head>

<body>

	<div class="container">

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
		<input type="text" placeholder="MM/DD/YYYY" id="releasedate" name="releasedate">
		<br />

		<label for="datecompleted">Completed Date</label>
		<input type="text" placeholder="MM/DD/YYYY" id="datecompleted" name="datecompleted">
		<br />

		<label for="completiontime">Completion Time</label>
		<input type="text" placeholder="Completion Time" id="completiontime" name="completiontime">
		<br />

		<label for="rating">Personal Rating</label>
		<input type="number" placeholder="Rating" id="rating" name="rating" min="1" max="10">
		<br />

		<label for="reccomend ">Reccomend Y/N</label>
		<p><label><input name="reccomend" type="radio" checked /><span>Yes</span></label></p>
    	<p><label><input name="reccomend" type="radio" /><span>No</span></label></p>

		<!-- 
		<input type="radio" placeholder="Rec" id="reccomend" name="reccomend" value="Yes"> Yes
		<input type="radio" placeholder="Rec" id="reccomend" name="reccomend" value="No"> No
		<br />
 -->
		<label for="comment">Extra Comment</label>
		<br>
		<textarea cols="40" rows="5" id="comment" name="comment"></textarea>
		<br />

		<input type="submit" value="Submit">

	</form>

	<a href="ViewGame.php">View your game list</a>
	<br>

	</div>

</body>


</html>
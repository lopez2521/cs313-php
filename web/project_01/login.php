<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>
	<p id="header"><h1>Fan Fanatic</h1></p>

<p id="login">
	<form method="post" id="login" action="welcome.php">
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<input type="submit" name="button" value="login">
	</form>

	<p>If it's your first time here, please <a href="signUp.php">sign up.</a></p>

	<div>
    	<p>Or go to the <a href="main.php">homepage here.</a></p>
    </div>
<div id="footer">
		<p>&copy 2018, Fan Fanatic</p>
	</div>
</body>
</html>
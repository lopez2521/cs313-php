<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>

<p id="login">
	<form method="post" id="login" action="welcome_back.php">
		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<input type="button" name="button" value="login">
	</form>

	<p>Please sign up if you don't haven't yet</p>
	<form method="post" id="signup" action="signup.php">
		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
	</form>
</p>
</body>
</html>
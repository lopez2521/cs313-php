<?php

session_start();

// require('products.php');

// session_start();
// if (!isset($_SESSION['username'])) {
// 	header('Location: signIn.php');
// 	die();
// }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Project 01</title>
	<link rel="stylesheet" type="text/css" href="fan.css" />
	<script type="text/javascript" src="fans.js"></script>
</head>
<body>
	<p id="header">
		<h1>Welcome to Fan Fanatic</h1>
	</p>
<p id="login">
	Please sign in <a href="login.php">here</a>
</p><br />


<p>If you would like to search for a particular item, please go <a href="search.php">here.</a></p>

<p>Welcome <?php echo htmlspecialchars($_SESSION['username']) ?></p>

	<form method="post" action="checkout.php">
		<div><p>Choose Your Team!</p>
		<select name="teams" id="teams" onchange="getPic();">
			<option value="choose">Choose Team</option>
			<option value="Arizona">Arizona Cardinals</option>
			<option value="Altanta">Atlanta Falcons</option>
			<option value="Baltimore">Baltimore Ravens</option>
			<option value="Buffalo">Buffalo Bills</option>
			<option value="Carolina">Carolina Panthers</option>
			<option value="Chicago">Chicago Bears</option>
			<option value="Cincinnati">Cincinnati Bengals</option>
			<option value="Cleveland">Cleveland Browns</option>
			<option value="Dallas">Dallas Cowboys</option>
			<option value="Denver">Denver Broncos</option>
			<option value="Detroit">Detroit Lions</option>
			<option value="Green">Green Bay Packers</option>
			<option value="Houston">Houston Texans</option>
			<option value="Indianapolis">Indianapolis Colts</option>
			<option value="Jacksonville">Jacksonville Jaguars</option>
			<option value="LA Chargers">Los Angeles Chargers</option>
			<option value="LA Rams">Los Angeles Rams</option>
			<option value="Miami">Miami Dolphins</option>
			<option value="Minnesota">Minnesota Vikings</option>
			<option value="New England">New England Patriots</option>
			<option value="New Orleans">New Orleans Saints</option>
			<option value="Giants">New York Giants</option>
			<option value="Jets">New York Jets</option>
			<option value="Oakland">Oakland Raiders</option>
			<option value="Philadelphia">Philadelphia</option>
			<option value="Pittburgh">Pittburgh Steelers</option>
			<option value="San Fran">San Francisco</option>
			<option value="Seattle">Seattle Seahawks</option>
			<option value="Tampa">Tampa Bay Buccaneers</option>
			<option value="Tennessee">Tennessee Titans</option>
			<option value="Washington">Washington Redskins</option>
		</select>
	</div>
	<div>
	<img id="teampic"></div>
		<div>
			<p>Shirt Price/Size: $18.99</p>
			<select id="shirt" name="shirt">
				<option value="smshirt">Small</option>
				<option value="mdshirt">Medium</option>
				<option value="lgshirt">Large</option>
				<option value="xlshirt">Extra Large</option>
			</select>
		</div>
		<div>
			<p>Sweatshirt Price/Size: $49.99</p>
			<select id="sweatshirt" name="sweatshirt">
				<option value="smsweatshirt">Small</option>
				<option value="mdsweatshirt">Medium</option>
				<option value="lgsweatshirt">Large</option>
				<option value="xlsweatshirt">Extra Large</option>
			</select>
		</div><br />

		<div><p>Choose a Team Hat: $19.99</p>
			<select id="hat" name="hat">
				<option value="choose">Choose Team</option>
				<option value="Arizona">Arizona Cardinals</option>
				<option value="Altanta">Atlanta Falcons</option>
				<option value="Baltimore">Baltimore Ravens</option>
				<option value="Buffalo">Buffalo Bills</option>
				<option value="Carolina">Carolina Panthers</option>
				<option value="Chicago">Chicago Bears</option>
				<option value="Cincinnati">Cincinnati Bengals</option>
				<option value="Cleveland">Cleveland Browns</option>
				<option value="Dallas">Dallas Cowboys</option>
				<option value="Denver">Denver Broncos</option>
				<option value="Detroit">Detroit Lions</option>
				<option value="Green">Green Bay Packers</option>
				<option value="Houston">Houston Texans</option>
				<option value="Indianapolis">Indianapolis Colts</option>
				<option value="Jacksonville">Jacksonville Jaguars</option>
				<option value="LA Chargers">Los Angeles Chargers</option>
				<option value="LA Rams">Los Angeles Rams</option>
				<option value="Miami">Miami Dolphins</option>
				<option value="Minnesota">Minnesota Vikings</option>
				<option value="New England">New England Patriots</option>
				<option value="New Orleans">New Orleans Saints</option>
				<option value="Giants">New York Giants</option>
				<option value="Jets">New York Jets</option>
				<option value="Oakland">Oakland Raiders</option>
				<option value="Philadelphia">Philadelphia</option>
				<option value="Pittburgh">Pittburgh Steelers</option>
				<option value="San Fran">San Francisco</option>
				<option value="Seattle">Seattle Seahawks</option>
				<option value="Tampa">Tampa Bay Buccaneers</option>
				<option value="Tennessee">Tennessee Titans</option>
				<option value="Washington">Washington Redskins</option>
			</select>			
		</div>


<div id="gender">
		Gender:
<input type="radio" name="gender" id="gender" value="female" />Female
<input type="radio" name="gender" id="gender" value="male" />Male<br />
<p>Comments:<br />
<textarea id="comments" name="other"></textarea><br />
</p>
<input type="submit" name="submit" value="Order Form"> <br />
</div>
	</form>
	<div id="footer">
		<p>&copy 2018, Fan Fanatic</p>
	</div>

</body>
</html>
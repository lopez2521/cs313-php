<?php

session_start();

// require('products.php');

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Project 01: Fanatic Fan</title>
	<link rel="stylesheet" type="text/css" href="fan.css" />
	<script type="text/javascript" src="fan.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logo.png" />
	</div>
	<h1>"Fanatic Fan"</h1>
	<div id="page">
		<h2 class="first">We have choices to match the heart!</h2>
<form action="add.php" method="post">
  <?php
    foreach ($products as $key => $value) {
      echo $value['label'] . ' ' . $value['price'] . '<input name="' . $key . '" type="number" min="0"><br>';
      echo '<img src="' . $value['img'] . '"><br /><br />';
    }
  ?>
  <button>Add to Cart</button><br />
  <input type="button" onclick="location.href='checkout.php';" value="Go to Checkout" />
  <input type="button" id="reset" value="Reset Form" onclick="location.href='clear.php';"></input>
</form>
	</div>
	<div id="footer">
		&copy; 2018, Fanatic Fan <br />
	</div>

</body>
</html>
 -->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Project 01</title>
	<link rel="stylesheet" type="text/css" href="fan.css" />
	<script type="text/javascript" src="fans.js"></script>
</head>
<body>
	<p id="header"></p>

	<input type="button" name="return" value="Continue Shopping" onclick="window.location.href='main.php'" /><br />
     <form method="POST" action="confirmation.php">
      <h3>Mailing Information</h3>
      <fieldset>
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" placeholder="First Name" ><br />
        <label for="firstname">Last Name:</label>
        <input type="text" name="lastname" placeholder="Last Name" ><br />
        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="Address" ><br />
        <label for="state">State</label>
        <input type="text" name="state" placeholder="City" ><br />
        <label for="zip">Zip Code:</label>
        <input type="text" name="zip" placeholder="Zip Code" ><br />
      </fieldset>
      <input type="button" id="reset" value="Reset Form" onclick="location.href='clear.php';"></input>
     <input type="button" name="order" value="Order Now" onclick="submit();"><br />
	<!-- <form method="post" action="confirmation.php">
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

		<div id="hat"><p>Team Hat: $19.99</p>
				<input type="radio" name="hat" value="yes">YES
				<input type="radio" name="hat" value="no">NO
		</div>
		<div>
			<p>Shirt Price/Size: $9.99</p>
			<select id="size" name="size">
				<option value="smshirt">Small</option>
				<option value="mdshirt">Medium</option>
				<option value="lgshirt">Large</option>
				<option value="xlshirt">Extra Large</option>
			</select>
		</div>
		<div>
			<p>Sweatshirt Price/Size: $39.99</p>
			<select id="sweatshirt" name="sweatshirt">
				<option value="smsweatshirt">Small</option>
				<option value="mdsweatshirt">Medium</option>
				<option value="lgsweatshirt">Large</option>
				<option value="xlsweatshirt">Extra Large</option>
			</select>
		</div><br />

<div id="gender">
		Gender:
<input type="radio" name="gender" id="gender" value="female" />Female
<input type="radio" name="gender" id="gender" value="male" />Male<br />
<p>Comments:<br />
<textarea id="comments" name="other"></textarea><br />
</p>
<input type="submit" name="submit" value="Order Form"> <br />
</div>
	</form> -->
	<div id="footer">
		<p>&copy 2018, Fan Fanatic</p>
	</div>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Ponder 05</title>
</head>
<body>
<h1>Search for some items and get pricing!</h1>
    <?php 
// This is the basic connection
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$rows = null;

error_reporting(E_ALL);
ini_set("display_errors", 1);

if(!empty($_POST['product'])) {
    $product = filter_input(INPUT_POST, 'product', FILTER_SANITIZE_STRING);
    $youritem = '%' . $product . '%';

    $stmt = $db->prepare('SELECT * FROM product WHERE price LIKE :price');
    $stmt->bindValue('product', $youritem, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
}

else {
    $stmt = $db->prepare('SELECT * FROM product');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// echo '<h1>Items</h1>';

// foreach($rows as $row) {
//     echo '<pre>';
//     var_dump($row);
//     echo '</pre>';
// }

foreach($rows as $row) {
    echo '<p>';
    // echo '<a href="details.php?id=' . $row['item_id'] . '">';
    echo '<strong>' . $row['id'] . ' ' . $row['name'] . ':' . $row['team'] . ' - </strong></a>';
    echo '</p>';
}
?>
<!-- STRETCH CHALLENGE 01 -->


<form action="" method="post">

<select name="teams" id="teams">
<?php
$stmt = $db->query('SELECT id, name FROM team');
$stmt->execute();
while ($row = $stmt->fetch()) {
  echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
}
?>
</select>
<input type="submit" name="Find">
</form>
<!-- <br>
<form action="prove_05.php" method="post">
    <strong><label for="item">Item:</label></strong>
    <input type="text" name="item" id="item">
    <input type="submit" value="Search">
</form>
 </body>
 </html> -->


	<!-- <form method="post" action="checkout.php">
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

		<div id="hat"><p>Team Hat: $14.99</p>
				<input type="radio" name="hat" value="yes">YES
				<input type="radio" name="hat" value="no">NO
		</div>
		<div>
			<p>Shirt Price/Size: $14.99</p>
			<select id="size" name="size">
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




<input type="submit" name="submit" value="Order Form"> <br />
</div>
	</form>
 -->

</body>
</html>
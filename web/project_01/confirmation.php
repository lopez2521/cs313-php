<?php session_start(); ?>
<?php require "connect.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Processed</title>
	<link rel="stylesheet" type="text/css" href="fan.css" />
</head>
<body>
	<h1>Confirmation Page</h1>

	<?php 
	// This if for the local host which is no longer working for me.
// 	try
// {
//   $user = 'postgres';
//   $password = 'password';
//   $db = new PDO('pgsql:host=localhost;dbname=myTestDB', $user, $password);

//   // this line makes PDO give us an exception when there are problems,
//   // and can be very helpful in debugging! (But you would likely want
//   // to disable it for production environments.)
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $ex)
// {
//   echo 'Error!: ' . $ex->getMessage();
//   die();
// }

	// This if for heroku, but I am attempting to put the connection in //different file called connection.php
// 	$dbUrl = getenv('postgres://bgphqracfarmll:b4c6c1adb264ee1a2d39907878ef4cd52d8cbc114c771afbab616657a89e492f@ec2-54-83-19-244.compute-1.amazonaws.com:5432/ddfb1nn1gejh4v');

// $dbopts = parse_url($dbUrl);

// $dbHost = $dbopts["host"];
// $dbPort = $dbopts["port"];
// $dbUser = $dbopts["user"];
// $dbPassword = $dbopts["Cristina2521"];
// $dbName = ltrim($dbopts["path"],'/');

// $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	?> 
	<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	?>

	<div id="footer">
		&copy; 2018, Fanatic Fan <br />
	</div>

</body>
</html>
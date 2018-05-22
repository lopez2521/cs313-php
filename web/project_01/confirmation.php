<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Processed</title>
	<link rel="stylesheet" type="text/css" href="fan.css" />
</head>
<body>
	<h1>Confirmation Page</h1>

	<?php 
	try
{
  $user = 'postgres';
  $password = 'Cristina2521';
  $db = new PDO('pgsql:host=127.0.0.1;dbname=store', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

$statement = $db->query('SELECT username, password FROM client');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	?>
	 
   <?php
   $dbUrl = getenv('postgres://bgphqracfarmll:b4c6c1adb264ee1a2d39907878ef4cd52d8cbc114c771afbab616657a89e492f@ec2-54-83-19-244.compute-1.amazonaws.com:5432/ddfb1nn1gejh4v');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:password@localhost:5432/cs313db";
}

$dbopts = parse_url($dbUrl);

print "<p>$dbUrl</p>\n\n";

$dbHost = $dbopts["127.0.0.1"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["postgres"];
$dbPassword = $dbopts["Cristina2521"];
$dbName = ltrim($dbopts["store"],'/');

print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";

try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

foreach ($db->query('SELECT now()') as $row)
{
 print "<p>$row[0]</p>\n\n";
}

	?> 
	<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	?>

	<?php
	$query = "INSERT INTO client (
    VALUES '$firstname', '$lastname', '$address', '$state', 'zip' );"
	?>
	<div>
		<?php echo "<br />Your order will ship to: <br />" . $firstname . " " . $lastname;?> <br />
		<?php echo $address;?><br />
		<?php echo $city . ', ' . $zip?><br />
	</div>
	<div id="footer">
		&copy; 2018, Fanatic Fan <br />
	</div>

</body>
</html>
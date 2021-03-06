<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>
	<p id="header"></p>

<?php


$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $db->prepare('SELECT * FROM orders');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<h1>Order list</h1>';

foreach($rows as $row) {
    echo '<p>';
    echo '<strong>' . 'Order ID' . $row['order_id'] . '<br />' . 'Team: ' . $row['teams'] . '<br />' . 'Hat: ' . $row['hat'] . '<br />' . 'Shirt: ' . $row['shirt'] . '<br />' . 'Sweatshirt' . $row['sweatshirt'] . '<br />' . 'Gender: ' . $row['gender'] . '<br />' . 'Comments: ' . $row['comments'] . '<br />' . '</strong>';
    echo '</p>';
}

	
?>

<p><a href="main.php">Return to Homepage.</a></p>

<div id="footer">
		<p>&copy 2018, Fan Fanatic</p>
	</div>
</body>
</html>
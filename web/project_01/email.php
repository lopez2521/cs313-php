<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>

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

$stmt = $db->prepare('SELECT * FROM email_list');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<h1>Email list</h1>';

foreach($rows as $row) {
    echo '<p>';
    echo '<strong>' . $row['email'] . '</strong>';
    echo '</p>';
}

	
?>

<p>If you would like to remove you email, then we understand.</p>

<form method="post" id="removeEmail" action="removeEmail.php">
	<input type="text" name="removeEmail">
	<input type="submit" name="removedEmail" value="Remove Email">
</form>

</body>
</html>
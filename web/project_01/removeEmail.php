<!DOCTYPE html>
<html>
<head>
	<title>Remove Email</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>
	<?php

try
{

	$removeEmail = $_POST['removeEmail'];

	$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $db->prepare("DELETE FROM email_list WHERE email = $removeEmail");
//$statement->bindValue(':removeEmail', $removeEmail);
$stmt->execute();

echo '<h1>Email list</h1>';


}
catch (PDOException $ex)
{
	echo "There is a problem.";
}

echo "Your email has been removed. Sorry to see you go.";


	?>

	<p><a href="email.php">Go ahead and check for yourself!</a></p>

</body>
</html>

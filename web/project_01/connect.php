<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$dbUrl = getenv('postgres://bgphqracfarmll:b4c6c1adb264ee1a2d39907878ef4cd52d8cbc114c771afbab616657a89e492f@ec2-54-83-19-244.compute-1.amazonaws.com:5432/ddfb1nn1gejh4v');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["Cristina2521"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

// Put them together
// default Heroku Postgres configuration URL
$dbUrl = getenv('postgres://bgphqracfarmll:b4c6c1adb264ee1a2d39907878ef4cd52d8cbc114c771afbab616657a89e492f@ec2-54-83-19-244.compute-1.amazonaws.com:5432/ddfb1nn1gejh4v');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:password@localhost:5432/store";
}

$dbopts = parse_url($dbUrl);

print "<p>$dbUrl</p>\n\n";

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
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

</body>
</html>
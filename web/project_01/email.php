<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>

</body>
</html>
<?php



  require('connect.php');
  $db = get_db();

  $email = $_POST['email'];

  try
{
	
	$query = 'SELECT * FROM email_list';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':email', $email);
	$statement->execute();
	
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

echo "<h1>The list of emails.</h1>";

	
?>
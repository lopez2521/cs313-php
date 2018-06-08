<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Confirmation</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>

<?php



  require('connect.php');
  $db = get_db();

  $username = $_POST['username'];
   $password = $_POST['password'];

   if (isset($username) || $username = "" || !isset($password) || $password = "") {
   	header("Location: signup.php");
   	die();
   }

   // Prevent injection
   $username = htmlspecialchars($username);

   // Lets hash the password
   $passwordHash = password_hash($password, PASSWORD_DEFAULT);

  try
{
	
	$query = 'INSERT INTO create_account (user_name, password) VALUES(:username, :password)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $passwordHash);
	$statement->execute();
	
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: main.php");
die();

	
?>

<!-- <p><a href="email.php">Check for your email.</a>It is all of the emails in the database, but I wanted to show that its there.</p> -->



</body>
</html>
<?php

$username = $_POST['username'];
   $password = $_POST['password'];

  
// Prevent injection
   $username = htmlspecialchars($username);

   // Lets hash the password
   $passwordHash = password_hash($password, PASSWORD_DEFAULT);

   header("Location: signIn.php");

  require('connect.php');
  $db = get_db();


   try
{
	
	$query = 'INSERT INTO create_account(user_name, password) VALUES(:username, :password)';
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
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Confirmation</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>

<!-- <p><a href="email.php">Check for your email.</a>It is all of the emails in the database, but I wanted to show that its there.</p> -->



</body>
</html>
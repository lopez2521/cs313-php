<?php

  require('connect.php');
  $db = get_db();

  $email = $_POST['email'];

  try
{
	
	$query = 'INSERT INTO email_list (email) VALUES(:email)';
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

echo "You are all signed up!";

	
?>
<?php


if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  require('connect.php');
  $db = get_db();

  $email = $_POST['email'];

  try
{
	// Add the Scripture
	// We do this by preparing the query with placeholder values
	$query = "INSERT INTO email_list (email) VALUES('$email')";
	$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
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
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Back</title>
	<link rel="stylesheet" type="text/css" href="fan.css">
</head>
<body>
	<?php
	$email - $_POST['email'];
	$password = $_POST['password'];

	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
	?>


</body>
</html>
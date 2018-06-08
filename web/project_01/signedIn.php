<?php
session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	


	require('connect.php');
	$db = get_db();
    
    $query = 'SELECT password FROM users WHERE username = :username';

    			$statement = $db->prepare($query);
    			$statement->bindValue(':username', $username);
    			
    			$statement->execute();

   		$fetch_user = $statement->fetch();
   		

   		if (password_verify($password, $fetch_user['password'])) {
   			$_SESSION['username'] = $username;
   			header('Location: welcome.php');
   		}

   		else {
   			header('Location: signIn.php');
   		}

   
	?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
</head>
<body>

  <br />
  <p>If you want to go back to the main page, go <a href="main.php">here.</a></p>

</body>
</html>
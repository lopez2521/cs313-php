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
   			header('Location: main.php');
   		}

   		else {
   			header('Location: signIn.php');
   		}

   
	?>

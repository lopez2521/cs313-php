<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$passwordHash = password_hash($password, PASSWORD_DEFAULT);

	header('Location: signIn.php');

	require('connect.php');
	$db = get_db();
    
    $query = 'INSERT INTO users.users(username, password)
    			VALUES (:username, :password)';

    			$statement = $db->prepare($query);
    			$statement->bindValue(':username', $username);
    			$statement->bindValue(':password', $passwordHash);
    			$statement->execute();

   		


	?>

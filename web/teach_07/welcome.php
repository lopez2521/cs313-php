<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('Location: signIn.php');
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>

	<p>Welcome <?php echo htmlspecialchars($_SESSION['username']) ?></p>

</body>
</html>
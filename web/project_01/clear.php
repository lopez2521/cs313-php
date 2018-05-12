<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="flowers.css" />
</head>
<body>

	
<?php

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

echo "<h1>Your cart has been cleared.</h1>" 

?>
<p class="clear">
Continue Shopping: <input type="button" id="continue" value="Shop" onclick="location.href='main.php';"></input>
</p>
</body>
</html>
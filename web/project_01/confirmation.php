<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Processed</title>
	<link rel="stylesheet" type="text/css" href="fan.css" />
</head>
<body>
	<h1>Confirmation Page</h1>
	 
   
	<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	?>
	<div>
		<?php echo "<br />Your order will ship to: <br />" . $firstname . " " . $lastname;?> <br />
		<?php echo $address;?><br />
		<?php echo $city . ', ' . $zip?><br />
	</div>
	<div id="footer">
		&copy; 2018, Fanatic Fan <br />
	</div>

</body>
</html>
<?php
require('dbConnect.php');
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pick Topic</title>
</head>
<body>
	<h1>Topic Entry</h1>
	<form id="mainForm" method="post" action="insertTopic.php">
		<label for="txtBook">Book</label>
		<input type="text" name="txtBook" id="txtBook">
		<br />

		<label>Chapter</label>
	</form>

</body>
</html>
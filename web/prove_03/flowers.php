
<!-- I had a lot of help from the TA Connor. I literally spent 12 hours trying to make my site work, but when Connor helped me for 15 minutes, it all started to make sense. I can't take full credit though. I have a lot to learn and a long ways to go. -->

<?php

session_start();

require('products.php');

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Prove 03: Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="flowers.css" />
	<script type="text/javascript" src="flowers.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logo.png" />
	</div>
	<h1>Welcome to "Flower's R Us"</h1>
	<div id="page">
		<h2 class="first">We have choices to match the heart!</h2>
<form action="add.php" method="post">
  <?php
    foreach ($products as $key => $value) {
      echo $value['label'] . ' ' . $value['price'] . '<input name="' . $key . '" type="number" min="0"><br>';
      echo '<img src="' . $value['img'] . '"><br /><br />';
    }
  ?>
  <button>Add to Cart</button><br />
  <input type="button" onclick="location.href='checkout.php';" value="Go to Checkout" />
  <input type="button" id="reset" value="Reset Form" onclick="location.href='clear.php';"></input>
</form>
	</div>
	<div id="footer">
		&copy; 2018, Flowers R Us <br />
	</div>

</body>
</html>
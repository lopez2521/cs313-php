<?php 
session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Fanatic Order</title>
  <link rel="stylesheet" type="text/css" href="fan.css" />
</head>
<body>
  <h1>Checkout Page</h1>  
    <div class="checkout" >
      <h3 class="first">Here is your order</h3>
      <?php
      require('products.php');

$taxRate = 0.08;

function calculateSubtotal($cart, $products) {
  $subtotal = 0;

  foreach ($cart as $key => $quantity) {
    $cost = $products[$key]['price'] * $quantity;

    if ($quantity > 0) {
      echo 'Ordering: ' . $products[$key]['label'] . ': ' . $quantity . '- $' . $cost . '<br>';
    }

    $subtotal += $cost;
  }

  return $subtotal;
};


$subtotal = calculateSubtotal($_SESSION['cart'], $products);

echo '<br>' . $subtotal;
?>
     <input type="button" name="return" value="Continue Shopping" onclick="window.location.href='main.php'" /><br />
     <form method="POST" action="confirmation.php">
      <h3>Mailing Information</h3>
      <fieldset>
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" placeholder="First Name" ><br />
        <label for="firstname">Last Name:</label>
        <input type="text" name="lastname" placeholder="Last Name" ><br />
        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="Address" ><br />
        <label for="state">State</label>
        <input type="text" name="state" placeholder="City" ><br />
        <label for="zip">Zip Code:</label>
        <input type="text" name="zip" placeholder="Zip Code" ><br />
      </fieldset>
      <input type="button" id="reset" value="Reset Form" onclick="location.href='clear.php';"></input>
     <input type="button" name="order" value="Order Now" onclick="submit();"><br />


     </form>

      
    </div>
  </div>
  <div id="footer">
    &copy; 2018, Fanatic Fan <br />
  </div>
</body>
</html>
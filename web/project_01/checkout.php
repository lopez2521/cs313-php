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


// This is the basic connection
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  ?>
<?php error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php
// $taxRate = 0.08;

// function calculateSubtotal($cart, $products) {
//   $subtotal = 0;

//   foreach ($cart as $key => $quantity) {
//     $cost = $products[$key]['price'] * $quantity;

//     if ($quantity > 0) {
//       echo 'Ordering: ' . $products[$key]['label'] . ': ' . $quantity . '- $' . $cost . '<br>';
//     }

//     $subtotal += $cost;
//   }

//   return $subtotal;
// };


// $subtotal = calculateSubtotal($_SESSION['cart'], $products);

// echo '<br>' . $subtotal;
//?>
<?php
  $teams = $_POST['teams']
  $hat = $_POST['hat'];
  $shirt = $_POST['shirt'];
  $sweatshirt = $_POST['sweatshirt'];
  $gender = $_POST['gender'];
  $commnets = $_POST['comments'];

  require("connect.php");
$db = get_db();

try {
  $query = 'INSERT INTO ordering(teams, hat, shirt, sweatshirt, gender, comments) VALUES (:teams, :hat, :shirt, :sweatshirt, :gender, :comments)';

  $statement = $db->prepare($query);

  $statement->bindValue(':teams', $teams);
  $statement->bindValue(':hat', $hat);
  $statement->bindValue(':shirt', $shirtt);
  $statement->bindValue(':sweatshirt', $sweatshirt);
  $statement->bindValue(':gender', $gender);
  $statement->bindValue(':comments', $comments);
  $statement->execute();
}

catch (Exception $ex)
{
  // Please be aware that you don't want to output the Exception message in
  // a production environment
  echo "Error with DB. Details: $ex";
  die();
}

  
  ?>

     <input type="button" name="return" value="Continue Shopping" onclick="window.location.href='main.php'" /><br />
     

      
    </div>
  </div>
  <div id="footer">
    &copy; 2018, Fanatic Fan <br />
  </div>
</body>
</html>
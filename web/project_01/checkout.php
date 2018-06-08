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
<!-- had something here for the cart  -->
<?php
  $teams = $_POST['teams'];
  $hat = $_POST['hat'];
  $shirt = $_POST['shirt'];
  $sweatshirt = $_POST['sweatshirt'];
  $gender = $_POST['gender'];
  $commnets = $_POST['comments'];

  require 'connect.php';
  $db = get_db();

try {
  $query = 'INSERT INTO orders(teams, hat, shirt, sweatshirt, gender, comments) VALUES (:teams, :hat, :shirt, :sweatshirt, :gender, :comments)';

  $statement = $db->prepare($query);

  $statement->bindValue(':teams', $teams);
  $statement->bindValue(':hat', $hat);
  $statement->bindValue(':shirt', $shirtt);
  $statement->bindValue(':sweatshirt', $sweatshirt);
  $statement->bindValue(':gender', $gender);
  $statement->bindValue(':comments', $comments);
  $statement->execute();

  echo "Your order has been placed.<br />";
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
     <p>If you would like to view your order, go <a href="orderStatus.php">HERE</a></p>
     

      
    </div>
  </div>
  <div id="footer">
    &copy; 2018, Fanatic Fan <br />
  </div>
</body>
</html>
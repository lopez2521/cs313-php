<!-- <?php
require('connect.php');

?> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Ponder 05</title>
</head>
<body>
<h1>Search for some items and get pricing!</h1>

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
<!-- Here are some select statements to look for items. They are inside the form -->
<!-- Require the file that contains your PDO database connection object in it.
require('db.php') -->

<form action="prove_05.php" method="post">
  <label for="teams">Teams</label>
  <select name="teams" id="teams">
  <option value="" selected>Any</option>
  <?php
  $stmt = $db->query('SELECT id, name FROM team');
  $stmt->execute();
  while ($row = $stmt->fetch()) {
    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
  }
  ?>
  </select>

  <label for="items">Items</label>
  <select name="items" id="items">
  <option value="" selected>Any</option>
  <?php
  $stmt = $db->query('SELECT id, name FROM item');
  $stmt->execute();
  while ($row = $stmt->fetch()) {
    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
  }
  ?>
  </select>

  <label for="sizes">Sizes</label>
  <select name="sizes" id="sizes">
  <option value="" selected>Any</option>
  <?php
  $stmt = $db->query('SELECT id, name FROM size');
  $stmt->execute();
  while ($row = $stmt->fetch()) {
    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
  }
  ?>
  </select>
  
  <button>Search</button>
</form>

<!-- associative arrays inside $input to describe a column form my products table -->
<?php
$inputs = array(
  array(
    'column'      => 'product.team_id',
    'placeholder' => 'team',
    'value'       => filter_input(INPUT_POST, 'teams')
  ),
  array(
    'column'      => 'product.item_id',
    'placeholder' => 'item',
    'value'       => filter_input(INPUT_POST, 'items')
  ),
  array(
    'column'      => 'product.size_id',
    'placeholder' => 'size',
    'value'       => filter_input(INPUT_POST, 'sizes')
  ),
);

// Integer flag to determine if the user has done a search for 
// at least one type of data. 

$inputCount = 0;

//Starting the query
$query = "SELECT
  size.name     AS size,
  item.name     AS item,
  team.name     AS team,
  product.price AS price
FROM product
INNER JOIN size
  ON product.size_id = size.id
INNER JOIN item
  ON product.item_id = item.id
INNER JOIN team
  ON product.team_id = team.id
WHERE ";


// We go over each individual element inside our array of inputs. If if
// has a value, we concatenate a placeholder condition into our WHERE clause.
// We also update the value of $inputCount to show that at least one of our
// desired inputs does exist, so the rest of the query is safe to run.
// If PHP can't find a value in $_POST, the blank input will be ignored.
foreach ($inputs as $input) {
  if (!empty($input['value'])) {
    if ($inputCount) {
      $query .= 'AND ';
    }
    
    $query .= "{$input['column']} = :{$input['placeholder']} ";
    $inputCount++;
  }
}

// Check $inputCount to make sure at least one of the desired inputs exists.
// If not, we need to supply a default clause to our query to select all rows.
if ($inputCount === 0) {
  $query .= 'TRUE';
}

// Prepare the parameterized query.
$stmt = $db->prepare($query);

// Bind values to the query.
foreach ($inputs as $input) {
  if (!empty($input['value'])) {
    $stmt->bindValue($input['placeholder'], $input['value']);
  }
}

// Execute the query.
$stmt->execute();

// Display the results.
while ($row = $stmt->fetch()) {
  echo '<pre>';
  var_dump($row);
  echo '</pre>';
}
?>


</body>
</html>
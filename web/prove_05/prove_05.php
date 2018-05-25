<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                    "http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>Ponder 05</title>
</head>
<body>
<h1>Search for some items and get pricing!</h1>
<?php
requrie ('connect.php');
?>

<form action="prove_05.php" method="post">
    <label for="teams">Teams</label>
    <select name="teams" id="teams">
        <option value="" selected>Pick Your Team</option>
        <?php
        $stmt = db->query('SELECT id, name FROM team');
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
        ?>
    </select>

    <label for="items">Items</label>
    <select name="items" id="items">
        <option value="" selected>Pick an Item</option>
        <?php
        $stmt = db->query('SELECT id, name FROM item');
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo '<option=value"' . $row['id'] . '">' . $row['name'] . '</option>';
        }
        ?>
    </select>

    <label for="sizes">Sizes</label>
    <select name="sizes" id="sizes">
        <option value="" selected>Pick a Size</option>
        <?php
        $stmt = db->query('SELECT id, name FROM SIZE');
        $stmt->execute();
        while ($row = $stmt->fetch()) {
             echo '<option=value"' . $row['id'] . '">' . $row['name'] . '</option>';
         } 
        ?>
    </select>

    <button>Search</button>
</form>

</body>
</html>
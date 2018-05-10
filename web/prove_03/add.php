<?php

session_start();

require('products.php');

foreach ($_POST as $key => $value) {
  if (array_key_exists($key, $products)) {
    if (!isset($_SESSION['cart'][$key])) {
      $_SESSION['cart'][$key] = 0;
    }

    $_SESSION['cart'][$key] += $_POST[$key];
  }
}

header('Location: flowers.php');

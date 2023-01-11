<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'chloe');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// create a new connection to db
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
  die('Connection to DB failed' . $conn->connect_error);
}
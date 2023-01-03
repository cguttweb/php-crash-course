<?php
// dashboard page
session_start();

if (isset($_SESSION['username'])) {
  echo '<h1> Welcome ' . $_SESSION['username'] . '!</h1>';
} else {
  echo "<h1>Welcome Guest!</h1>";
  echo '<a href="/php-crash-course/13_sessions.php">Go home</a>';
}

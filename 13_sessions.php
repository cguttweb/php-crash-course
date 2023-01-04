<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

// Must have session started
session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

  if ($username == 'chloe' && $password == 'test') {
    $_SESSION['username'] = $username;
    // redirect to dashboard page
    header('Location: /php-crash-course/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <div>
    <label for="username">Username:</label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>
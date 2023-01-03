<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

// Must have session started


if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($username == 'chloe' && $password == 'test') {
    $_SESSION['username'] = $username;
    // redirect to dashboard page
    header('Location: /php-crash-course/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
}
?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Chloe&age=30">Click</a> -->

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
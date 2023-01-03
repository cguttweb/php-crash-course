<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// echo $_GET['name'];
// echo $_GET['age'];
if (isset($_POST['submit'])) {
  echo $_POST['name'];
  echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Chloe&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <div>
    <label>Name:
      <input type="text" name="name">
    </label>
  </div>
  <div>
    <label>Age:
      <input type="text" name="age">
    </label>
  </div>
  <input type="submit" value="Submit" name="submit">
</form>
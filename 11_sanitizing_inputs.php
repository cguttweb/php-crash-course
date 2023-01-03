<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
  // $name = htmlspecialchars($_POST['name']);
  // $age = htmlspecialchars($_POST['age']);

  // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  echo $name;
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
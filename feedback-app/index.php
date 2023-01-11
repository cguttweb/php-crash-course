<!-- include is one method which will load rest of the page -->
<?php include './inc/header.php'; ?>
<!-- require is another if not found it stop everything also require_once -->
<!-- <?php require './inc/header.php'; ?> -->

<?php
  // shorthand to set variables to empty
  $name = $email = $body = '';
  $nameError = $emailError = $bodyError = '';

  // Form submit
  if(isset($_POST['submit'])){
    // Check name input
    if (empty($_POST['name'])) {
      $nameError = "Name is required";
    } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    // Check email
    if (empty($_POST['email'])) {
      $emailError = "Email is required";
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    // Check body/message
    if (empty($_POST['body'])) {
      $bodyError = "Body is required";
    } else {
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($nameError) && empty($emailError) && empty ($bodyError)) {
      // If no errors then add to database
      $sql = "INSERT INTO feedback (name, email, body) VALUES('$name', '$email', '$body')";

      if (mysqli_query($conn, $sql)) {
        header('Location: feedback.php');
      } else {
        echo 'Error' . mysqli_error($conn);
      }
    }
  }
?>

      <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
      <h2>Feedback</h2>
      <p class="lead text-center">Leave feedback for Traversy Media</p>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control <?php echo $nameError ? 'is-invalid' : null; ?>" id="name" name="name"
            placeholder="Enter your name">
            <div class="invalid-feedback">
              <?php echo $nameError; ?>
            </div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control <?php echo $emailError ? 'is-invalid' : null; ?>" id="email" name="email"
            placeholder="Enter your email">
            <div class="invalid-feedback">
              <?php echo $emailError; ?>
            </div>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Feedback</label>
          <textarea class="form-control <?php echo $bodyError ? 'is-invalid' : null; ?>" id="body" name="body"
            placeholder="Enter your feedback"></textarea>
            <div class="invalid-feedback">
              <?php echo $bodyError; ?>
            </div>
        </div>
        <div class="mb-3">
          <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
        </div>
      </form>
      <?php include './inc/footer.php'; ?>
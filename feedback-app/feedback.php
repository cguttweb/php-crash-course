<?php include './inc/header.php'; ?>

<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <h2>Feedback</h2>
    <!-- if using in html use this syntax to start/end if statement -->
    <?php if(empty($feedback)):?>
      <p class="lead">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">
        By <?php echo $item['name']?> on <?php echo $item['date']?>
       </div>
     </div>
   </div>
      <?php endforeach; ?>


  </div>
</main>

<footer class="text-center mt-5">
  Copyright &copy; 2022
</footer>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

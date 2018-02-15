<?php
$title = "Welcome";
$bodyClass = 'd-flex justify-content-center align-items-center';
include 'includes/header.php';
counterUsers();


?>

<!-- background video -->
<video loop muted autoplay>
<source src="vid/appBack1.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<!-- background video end -->

<!-- main content -->
<main class="col-12 col-sm-8 col-lg-4 animated text-center">
  <img src="img/todo.svg" alt="todo:" class="img-fluid">
  <p>With <span><?php echo counterUsers($numRows); ?></span> registered users!</p>
  <a href="login.php" class="btn btn-primary">Login</a>
  <a href="register.php" class="btn btn-primary">Register</a>
</main>
<!-- main content end -->

<?php include 'includes/footer.php';?>

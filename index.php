<?php
$bodyClass = 'd-flex justify-content-center align-items-center';
include 'includes/header.php';
?>

<!-- background video -->
<video loop muted autoplay>
<source src="vid/landing-page.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<!-- background video end -->

<!-- main content -->
<main class="animated shake">
  <img src="img/todo.svg" alt="todo:" class="img-fluid">
  <a href="login.php" class="btn">Login</a>
  <a href="register.php" class="btn">Register</a>
</main>
<!-- main content end -->

<?php include 'includes/footer.php';?>

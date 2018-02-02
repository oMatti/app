<?php
$bodyClass = 'd-flex justify-content-center align-items-center';
include 'includes/header.php';
$query ="SELECT * FROM users";
$result = mysqli_query($connection, $query);
$numRows = mysqli_num_rows($result);
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
  <p>With <?php echo $numRows; ?> registered users!</p>
  <a href="login.php" class="btn btn-primary">Login</a>
  <a href="register.php" class="btn btn-primary">Register</a>
</main>
<!-- main content end -->

<?php include 'includes/footer.php';?>

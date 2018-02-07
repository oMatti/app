<?php
session_start();

include "includes/header.php";


if (isset($_POST['addTask'])) {
    addTask();
  }
?>

<?php if(isset($_SESSION['username'])) : ?>

<?php include "includes/navigation.php"; ?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <?php include "includes/tasks.php"; ?>
  </div>
</div>

<?php else : ?>
<div class="alert alert-danger">
  You do not have access to this site!
</div>
<a href="login.php">Login now</a>
<?php endif; ?>

<?php include "includes/footer.php"; ?>

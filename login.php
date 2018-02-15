<?php
    $title = 'Login';
    $bodyClass = 'd-flex flex-column justify-content-center align-items-center';
    include "includes/header.php";
session_start();

$db_username ='';
$db_password = '';
$errorMessage = '';

      if(isset($_POST['login'])){

        loginUser();
        $errorMessage = loginUser();
      }
 ?>


    <form class="col-12 col-sm-8 col-lg-4 animated bounceInLeft forms" action="login.php" method="post">
      <img src="img/todo.svg" alt="" class="img-fluid lgn-reg">
      <h3>Login now</h3>
      <?php  ?>
      <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary" name="login" value="Login">Login</button>
      <a href="register.php">New user? Register here!</a>
    </form>



<?php if ($errorMessage) : ?>
    <div class="animated shake alert alert-danger">
      <?php echo $errorMessage; ?>
    </div>
  <?php endif; ?>
<?php include "includes/footer.php"; ?>

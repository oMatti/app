<?php
    $title = 'Login';
    $bodyClass = 'd-flex justify-content-center align-items-center';
    include "includes/header.php";
session_start();

$db_username ='';
$db_password = '';
$errorMessage = '';

      if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);


        $query = "SELECT * FROM Users WHERE username = '{$username}' ";
        $select_user_query = mysqli_query($connection, $query);

        if (!$select_user_query) {
          die('Query failed') . mysqli_error($connection);
        }
        while ($row = mysqli_fetch_array($select_user_query)) {
          $db_id = $row['id'];
          $db_username = $row['username'];
          $db_password = $row['password'];
        }

        $password = crypt($password, $db_password);

        if ($username === $db_username && $password === $db_password) {
          $_SESSION['id'] = $db_id;
          $_SESSION['username'] = $db_username;
          header("Location: new.php");
        }
        else {

          $errorMessage = "Wrong username or password!";
        }

      }
 ?>





    <form class="col-12 col-sm-8 col-lg-4 animated bounceInLeft" action="login.php" method="post">
      <h3>Login now</h3>
      <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary" name="login" value="Login">Login</button>
    </form>

    <?php if ($errorMessage) {
      echo "class='login animated shake'";  } ?>

<?php if ($errorMessage) : ?>
    <div id="alert" class="animated shake">
      <?php echo $errorMessage; ?>
    </div>
  <?php endif; ?>
<?php include "includes/footer.php"; ?>

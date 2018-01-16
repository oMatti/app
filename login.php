<?php
    include 'includes/db.php';
session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

      if(isset($_POST['login'])){


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

        if ($username === $db_username && $password === $db_password) {
          $_SESSION['username'] = $db_username;
          header("Location: new.php");
        }
        else {
          header("Location: login.php");
        }
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
      }
 ?>

  <?php
  $title = "Login";
   include "includes/header.php";
   ?>
    <form class="login animated bounceInLeft" action="login.php" method="post">
      <h3>Login now</h3>
      <input type="text" name="username" placeholder="Username" required autofocus>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="login" value="Login">
    </form>
  </body>
</html>

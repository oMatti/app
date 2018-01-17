<?php
    include 'includes/db.php';
session_start();



      if(isset($_POST['register'])){

        $username = $_POST['username'];
        $password = $_POST['password'];


        //escape quotes
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //password emcryption
        $hashFormat = "$2y$10$";
        $salt = "YuhakjhAS23890ASkjd2ijDKjas";
        $hashAndSalt = $hashFormat . $salt;
        $password = crypt($password, $hashAndSalt);


  $query = "INSERT INTO users(username, password)";
  $query .= "VALUES ('$username', '$password')";


  $result = mysqli_query($connection, $query);

if (!$result) {
  die("Query failed") . mysqli_error($connection);
}
else{

}
      }
 ?>

  <?php
  $title = "Register";
   include "includes/header.php";
   ?>
    <form class="login animated bounceInLeft" action="register.php" method="post">
      <h3>Register now</h3>
      <input type="text" name="username" placeholder="Username" required autofocus>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="register" value="Register">
    </form>
  </body>
</html>

<?php
  $title = 'Register';
  $bodyClass = 'd-flex justify-content-center align-items-center';
  include "includes/header.php";
session_start();


      if(isset($_POST['register'])){
        registerUser();
        $errorMessage = registerUser();
      }


   ?>

    <form class="col-12 col-sm-8 col-lg-4 animated bounceInLeft forms" action="register.php" method="post">
      <img src="img/todo.svg" alt="" class="img-fluid lgn-reg">
      <h3>Register now</h3>
      <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary" name="register" value="Register">Register</button>
    </form>

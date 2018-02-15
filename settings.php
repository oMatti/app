<?php
session_start();

include "includes/navigation.php";
include "includes/header.php";

if (isset($_POST['saveProfile'])) {
  $profilepic = $_FILES['profilepic']['name'];
  $profilepic_temp = $_FILES['profilepic']['tmp_name'];
  move_uploaded_file($profilepic_temp, "img/profilepics/$profilepic");
}

 ?>



<div class="container-fluid">
  <div class="row justify-content-center">

    <form class="col-12 col-sm-8 col-lg-4  uglySolutionFixLater animated bounceInLeft forms" action="settings.php" method="post" enctype="multipart/form-data">
      <div class="custom-file">
          <input type="file" name="profilepic" class="custom-file-input" id="validatedCustomFile" required>
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Something went wrong!</div>
        </div>
      <button name="saveProfile" type="submit" class="btn btn-primary" name="login" value="Login">Save</button>
    </form>

  </div>
</div>

<?php include "includes/footer.php"; ?>

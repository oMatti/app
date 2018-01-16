<?php
session_start();
$title = "Welcome";
include "includes/header.php";
?>

<?php if($_SESSION['username']) : ?>
<h1>Sup <?php echo $_SESSION['username']; ?></h1>
<a href="logout.php">Log out as <?php echo $_SESSION['username']; ?></a>
<?php else : ?>
<h1>GTFO</h1>
<a href="login.php">Login now</a>
<?php endif; ?>
  </body>
</html>

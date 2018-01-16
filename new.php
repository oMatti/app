<?php
session_start();
$title = "Welcome";
include "includes/header.php";
?>

<h1>Sup <?php echo $_SESSION['username']; ?></h1>

  </body>
</html>

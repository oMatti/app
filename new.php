<?php

$title = "Welcome";
include "includes/header.php";
session_start();

if (isset($_POST['addTask'])) {
  addTask();
}


?>

<?php if(isset($_SESSION['username'])) : ?>
<nav>
  <a href="logout.php">log out <?php echo $_SESSION['username']; ?></a>
  <h1>App</h1>
</nav>

<section>
  <h2>To do:</h2>
  <ul>
    <?php
    $query = "SELECT * FROM tasks WHERE userid = {$_SESSION['id']}";
    $result = mysqli_query($connection, $query);



    while ($row = mysqli_fetch_array($result)) :
?>
<li>
      <?php  echo  $row['task'] ;?>
    <a href="includes/delete.php?taskID=<?php echo $row['id'];?>">X</a>
    <a href="includes/edit.php?taskID=<?php echo $row['id'];?>&taskName=<?php echo $row['task'];?>">Edit</a>
</li>

    <?php endwhile; ?>
  </ul>

<form class="" action="new.php" method="post">
  <input type="text" name="taskName" value="">
  <input type="submit" name="addTask" value="Add task">
</form>
</section>

<?php else : ?>
<h1>GTFO</h1>
<a href="login.php">Login now</a>
<?php endif; ?>

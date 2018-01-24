<?php
  include 'header.php';

if (!empty($_GET['taskID'])) {
  $taskID = $_REQUEST['taskID'];
}

  if (!empty($_POST)) {
  $taskID = $_POST['taskID'];
  $query = "DELETE FROM tasks WHERE id = $taskID";
  $deleteTaskQuery = mysqli_query($connection, $query);
  header("Location: ../new.php");
  }
 ?>

<form class="" action="delete.php" method="post">
<input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
<h2>Are you sure want to delete this?</h2>
<input type="submit" name="deleteTask" value="Yes">
<a href="../new.php">No</a>
</form>

</body>
</html>

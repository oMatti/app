<?php


$currentTaskName = $_GET['taskName'];
$taskID = $_GET['taskID'];
$title = "Edit " . $currentTaskName . "?";
include "header.php";


if (isset($_POST['editTask'])) {
  $newTaskName = $_POST['taskName'];
  $taskID = $_POST['taskID'];

  $query = "UPDATE tasks SET task='$newTaskName' WHERE id = '$taskID'";
  $editTaskQuery = mysqli_query($connection, $query);
  header("Location: ../new.php");
}



/*
if (!empty($_GET['taskID'])) {
  $taskID = $_REQUEST['taskID'];
  echo $taskID;
}

if (!empty($_POST)) {
$editText = $_POST['editText'];
$query = "UPDATE tasks SET task='$editText' WHERE id = $taskID";
echo $query;
$editedTaskQuery = mysqli_query($connection, $query);
//header("Location: ../new.php");

}
*/
 ?>

<form class="" action="edit.php" method="post">
<input type="hidden" name="taskID" value="<?php echo $taskID ?>">
<input type="text" name="taskName" value="<?php echo $currentTaskName ?>">
<h2>Are you sure want to edit this?</h2>
<input type="submit" name="editTask" value="Yes">
<a href="../new.php">No</a>
</form>

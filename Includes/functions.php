<?php

$appName = "todo:";

  function usernameExists($username) {
    global $connection;

    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
      return true;
    }
    else {
      return false;
    }
  }

  function addTask() {
    global $connection;

    if (isset($_POST['taskName'])) {
      $title = $_POST['taskName'];
      $userID = $_SESSION['id'];

      $query = "INSERT INTO tasks(task, userid)";
      $query .= "VALUES('$title', '$userID')";

      $addTaskQuery = mysqli_query($connection, $query);
    }
    else {
      echo "Wtf?";
    }
  }

function ifSChange() {
  global $title;
  if (substr($_SESSION['username'], -1) === "s") {
  return  $title = $_SESSION['username'] . ' reminders';
  }
  else {
  return  $title = $_SESSION['username'] . 's' . ' reminders';
  }
}



 ?>

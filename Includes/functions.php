<?php

$appName = "todo:";

function counterUsers(){
  global $connection;
  $query ="SELECT id FROM users";
  $result = mysqli_query($connection, $query);
  return $numRows = mysqli_num_rows($result);
}


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

function registerUser(){
      global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];

  if (usernameExists($username)) {
    return "Username already exists";
  }
  else {

            //escape quotes
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);

            //password encryption
            $hashFormat = "$2y$10$";
            $salt = "YuhakjhAS23890ASkjd2ijDKjas";
            $hashAndSalt = $hashFormat . $salt;
            $password = crypt($password, $hashAndSalt);

    //SQL query
      $query = "INSERT INTO users(username, password)";
      $query .= "VALUES ('$username', '$password')";

    //confirmation
      $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed") . mysqli_error($connection);
    }
  }

  header("Location: login.php");
}

  function loginUser(){

    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);


    $query = "SELECT * FROM Users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
      die('Query failed') . mysqli_error($connection);
    }
    while ($row = mysqli_fetch_array($select_user_query)) {
      $db_id = $row['id'];
      $db_username = $row['username'];
      $db_password = $row['password'];
      $db_profilepic = $row['profilepic'];
    }

    $password = crypt($password, $db_password);

    if ($username === $db_username && $password === $db_password) {
      $_SESSION['id'] = $db_id;
      $_SESSION['username'] = $db_username;
      $_SESSION['profilepic'] = $db_profilepic;
      header("Location: new.php");
    }
    else {

    return $errorMessage = "Wrong username or password!";
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
      echo "Wtf? y tho?";
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

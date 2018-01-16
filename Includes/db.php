<?php
$connection = mysqli_connect('localhost', 'admin', 'Datanom2018', 'appdb');

if (!$connection) {
  die('Database connection failed...' . mysqli_error($connection));
}

 ?>

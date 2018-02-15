<section id="tasks" class="col-12 col-sm-8 col-lg-4">
  <h2>To do:</h2>
  <ul>
    <?php
    $query = "SELECT * FROM tasks WHERE userid = {$_SESSION['id']}";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) :
?>
<li>
      <?php  echo  $row['task'] ;?>
    <a class="go-right" href="includes/delete.php?taskID=<?php echo $row['id'];?>"> X </a>
    <a class="go-right" href="includes/edit.php?taskID=<?php echo $row['id'];?>&taskName=<?php echo $row['task'];?>"> Edit </a>
</li>
    <?php endwhile; ?>
  </ul>
<form class="" action="new.php" method="post">
  <input type="text" name="taskName" value="" autofocus required>
  <input id="buttonf" type="submit" name="addTask" value="Add task">
</form>
</section>

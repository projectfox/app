<?php
$currentTaskName = $_GET['taskName'];
$title = "Ändra " . $currentTaskName . "?";
include 'includes/header.php';

if(!empty($_GET['taskID'])) {
  $taskID = $_REQUEST['taskID'];
}

if (isset($_POST['editTask'])) {
  $newTaskName = $_POST['taskName'];
  $taskID = $_POST['taskID'];

  $query = "UPDATE tasks SET tittle='$newTaskName' WHERE id = $taskID";
  $deletTaskQuery = mysqli_query($connection, $query);
  header("Location: index.php");
}
?>
<form action="edit.php" method="post">
  <input type="hidden" name="taskID" value="<?php echo $taskID ?>">
  <input type="text" name="taskName" value="<?php echo $currentTaskName;?>">
  <input type="submit" name="editTask" value="Ändra">
  <a href="index.php"> nyhet!!</a>
</form>

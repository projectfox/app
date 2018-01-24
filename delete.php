<?php
  include 'includes/header.php';

  if(!empty($_GET['taskID'])) {
    $taskID = $_REQUEST['taskID'];
  }

  if (!empty($_POST)) {
    $taskID = $_POST['taskID'];
    $query = "DELETE FROM tasks WHERE id = $taskID";
    $deletTaskQuery = mysqli_query($connection, $query);
    header("Location: index.php");
  }
?>
 <form action="delete.php" method="post">
   <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
   <h2> Är du på att du vill radera detta inlägg?</h2>
   <input type="submit" name="deleteTask" value="ja">
   <a href="index.php">nej</a>

 </form>

 </body>
 </html>

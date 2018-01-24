<?php
session_start();
$title = "Välkommen";
include "includes/header.php";

 if (isset($_POST['addTask'])) {
   addTask();
  }
 ?>
<?php if (isset($_SESSION['username'])) :?>
  <nav>
  <a href="logout.php"> Logga ut <?php echo $_SESSION['username']; ?></a>
    <h1>App</h1>
  </nav>


  <section>
    <h2>att gör</h2>
    <ul>
      <?php
      $query = "SELECT * FROM tasks WHERE user_id = {$_SESSION['id']} " ;
      $result = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_array($result)) :
       ?>

        <li>
          <?php echo $row['tittle']; ?>
          <a href="edit.php?taskID=<?php echo $row['id']; ?>&taskName=<?php echo $row['tittle']; ?>">edit</a>
          <a href="delete.php?taskID=<?php echo $row['id']; ?>">x</a>
        </li>

     <?php endwhile; ?>

    </ul>
    <form action="index.php" method="post">
      <input type="text" name="taskName">
      <input type="submit" name="addTask" value="lägg till">

    </form>
  </section>
<?php else : ?>
  <?php header('Location: login.php'); ?>
<?php endif; ?>

</body>
</html>

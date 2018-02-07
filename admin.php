<?php
session_start();
if (substr($_SESSION['username'], -1) === "s") {
  $title = $_SESSION['username'] . ' reminders';
}
else {
  $title = $_SESSION['username'] . 's' . ' reminders';
}


include "includes/header.php";

 if (isset($_POST['addTask'])) {
   addTask();
  }
 ?>

<?php include "includes/navigation.php";?>

  <?php if (isset($_SESSION['username'])) :?>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <?php include "includes/tasks.php";?>
    </div>




  </section>
<?php else : ?>
  <?php header('Location: login.php'); ?>
<?php endif; ?>

<?php include "includes/footer.php"; ?>

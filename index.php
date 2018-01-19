<?php
session_start();
$title = "Välkommen";
include "includes/header.php";
 ?>
<?php if (isset($_SESSION['username'])) :?>
  <nav>
  <a href="logout.php"> Logga ut <?php echo $_SESSION['username']; ?></a>
    <h1>App</h1>
  </nav>
  <h1>välkommen <?php echo $_SESSION['username']; ?></h1>
<?php else : ?>
  <h1>Inloggning upptäcktes inte</h1>
<?php endif; ?>

</body>
</html>

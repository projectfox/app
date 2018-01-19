<?php
session_start();
$title = "Välkommen";
include "includes/header.php";
 ?>
<?php if (isset($_SESSION['username'])) :?>
  <h1>välkommen <?php echo $_SESSION['username']; ?></h1>
  <a href="logout.php"> Logga ut <?php echo $_SESSION['username']; ?></a>
  <input type="submit" name="hej" value="hej">
<?php else : ?>
  <h1>Inloggning upptäcktes inte</h1>
<?php endif; ?>

<ul>
  <li>test</li>
</ul>

</body>
</html>

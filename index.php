<?php
session_start();
$title = "välkommen";
include "includes/header.php";
 ?>
<?php if ($_SESSION['username']): ?>
<h1>välkommen <?php echo $_SESSION['$username']; ?></h1>
<a href="logout.php"> Logga ut <?php echo $_SESSION['username']; ?></a>

<?php else : ?>
<h1>Inloggning upptäcktes inte</h1>
<?php endif; ?>
</body>
</html>

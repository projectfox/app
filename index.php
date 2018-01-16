<?php
session_start();
$title = "välkommen";
include "includes/header.php";

 ?>
<h1>välkommen <?php echo $_SESSION['$username']; ?></h1>

</body>
</html>

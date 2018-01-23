<?php
session_start();
session_destroy();
header("Location: header.php");
header('Location: login.php'); 
exit;
?>

<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'appdb');

if (!$connection) {
  die('failed to connect to database.' . mysqli_error($connection));
}

?>

<?php
  include 'includes/db.php';
  session_start();
  $errorMessage = '';

  if (isset($_POST['register'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $username = mysqli_real_escape_string($connection, $username);
   $password = mysqli_real_escape_string($connection, $password);

   $heasFormat = "$2y$10$";
   $salt = "dsfdsdferfefsfgsdf92sf";

   $hash_end_salt = $heasFormat . $salt;
   $password = crypt($password, $hash_end_salt);

   $query = "INSERT INTO users(username, password)";
   $query .= "VALUES('$username', '$password')";

   $result = mysqli_query($connection, $query);

   if (!$result) {
     die("Query faild") . mysqli_error($connection);
    }

   header("Location: login.php");

   }
   $title = 'registrera';
   include "includes/header.php";
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>< Login | App</title>
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/app.css">
</head>
<body>

<form class="login animated fadeInDown" action="register.php" method="post">
  <h3>registrera</h3>
  <input type="text" name="username" placeholder='Användarnamn'>
  <input type="password" name="password" placeholder='Lösenord'>
  <input type="submit" name="register" value="Registrera">
  <?php echo $errorMessage; ?>
</form>
</body>
</html>

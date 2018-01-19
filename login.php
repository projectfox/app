<?php
  $title = 'logga in';
  $bodyID = "login";
  include 'includes/header.php';
  session_start();
  $errorMessage = '';

  if (isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $username = mysqli_real_escape_string($connection, $username);
   $password = mysqli_real_escape_string($connection, $password);

   $query = "SELECT * FROM  users WHERE username = '{$username}' ";
   $select_user_query = mysqli_query($connection, $query);

   if (!$select_user_query){
     die('Query faild') . mysqli_error($connection);
   }

   $db_username = '';
   $db_password = '';
   while ($row = mysqli_fetch_array($select_user_query)) {
    $db_id = $row['id'];
    $db_username = $row['username'];
    $db_password = $row['password'];
   }
   $password = crypt($password, $db_password);

   if ($username === $db_username && $password === $db_password) {
     $_SESSION['username'] = $db_username;
     $_SESSION['id'] = $db_id;
     header("Location: index.php");
   }
   else {
     $errorMessage = "<script type='text/javascript'>alert('Inloggningen misslyckades!')</script>";
   }
  }
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

<form class="login animated fadeInDown" action="login.php" method="post">
  <h3>Logga in</h3>
  <input type="text" name="username" placeholder='Användarnamn'>
  <input type="password" name="password" placeholder='Lösenord'>
  <input type="submit" name="login" value="Logga in">
  <a href="register.php">Registera dig här<a/>
  <?php echo $errorMessage; ?>
</form>


</body>
</html>

<?php
  $title = "registrera";
  $bodyID = "register";
  include "includes/header.php";
  session_start();
  $errorMessage = '';

  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (usernameExists($username)) {
      echo "Användarnamn fins redan";
    }
    else {
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
  }
?>
<form class="login animated fadeInDown" action="register.php" method="post">
  <h3>registrera</h3>
  <input type="text" name="username" placeholder='Användarnamn'>
  <input type="password" name="password" placeholder='Lösenord'>
  <input type="submit" name="register" class="btn btn-outline-light"value="registrera">
  <a href="login.php"class="btn btn-outline-light">logga in</a>
  <?php echo $errorMessage; ?>
</form>
</body>
</html>

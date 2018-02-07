<?php
  $title = 'logga in';
  $bodyID = "login";
  include "includes/header.php";
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
     header("Location: admin.php");
   }
   else {
     $errorMessage = "<script type='text/javascript'>alert('Inloggningen misslyckades!')</script>";
   }
  }
 ?>


<form class="login animated fadeInDown" action="login.php" method="post">
  <h3>login</h3>
  <input type="text" name="username" placeholder='Användarnamn'>
  <input type="password" name="password" placeholder='Lösenord'>
  <input type="submit"class="btn btn-outline-light" name="login" value="login">
  <a href="register.php"class="btn btn-outline-light"> registera </a>
  <?php echo $errorMessage; ?>
</form>


<?php include "includes/footer.php"; ?>

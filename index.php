<?php
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/header.php';



$query = "SELECT  id FROM users";
$result = mysqli_query($connection, $query);
$numberfOfUsers = mysqli_num_rows($result);
?>

<!-- video background -->
<video loop muted autoplay id="videoContainer">
    <source src="vid/land.mp4" type="video/mp4">+6
    browser does not support the video tag.
</video>
<!-- video background end -->


  <main class=" col-12 col-sm-8 col-lg-4 animate fadeInDown text-center">
    <img src="img/coca-cola.png" class="img-fluid" alt="CocaCola">
    <p>hej <span><?php echo $numberfOfUsers;?></span></p>
    <a href="login.php"class="btn btn-outline-light">Sign In</a>
    <a href="register.php"class="btn btn-outline-light"> Sign Up </a>
  </main>

<?php include 'includes/footer.php'; ?>

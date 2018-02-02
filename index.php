<?php
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/header.php';
?>

<!-- video background -->
<video loop muted autoplay id="videoContainer">
    <source src="vid/land.mp4" type="video/mp4">+6
    browser does not support the video tag.
</video>
<!-- video background end -->


  <main class="animate fadeInDown">
    <img src="img/CocaCola_logo_2.png" class="img-fluid" alt="CocaCola">
    <p>hej</p>
    <form class="button" action="index.html" method="post">
      <a href="login.php"class='button'>Sign In</a>
      <a href="register.php"class='button'> Sign Up </a>
    </form>
  </main>

<?php include 'includes/footer.php'; ?>

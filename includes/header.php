<?php
  include "db.php";
  include "functions.php";

  $title = "Välkommen";
 ?>
 <!doctype html>
 <html lang="sv">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
 <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
 <link rel="manifest" href="img/manifest.json">
 <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
 <meta name="theme-color" content="#000000">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/animate.css">
 <link rel="stylesheet" href="css/app.css">
 <title> <?php echo $appName . "&raquo, " . $appName;?></title>
 </head>
 <body<?php if(isset($bodyClass)) { echo " class='" . $bodyClass ."'"; } ?>>

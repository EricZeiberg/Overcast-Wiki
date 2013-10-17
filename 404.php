<!DOCTYPE html>
<?php
include("includes/functions.php");
?>
<style>
  .center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto;}
</style>
<title>Error 404</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="highlight.css" rel="stylesheet" media="screen">
    <link href="assets/ico/favicon.ico" rel="icon">
<body>
    <?php
      pageHeader("Home");
      ?>
<div class = "container">
  <div class="hero-unit center">
    <h1>Page Not Found <small><font face="Tahoma" color="red">Error 404</font></small></h1>
    <br />
    <p>Oops, this page does not exist! You probably have the wrong link. Move along now, nothing to see here</p>
    <p><b>Or you could just press this neat little button:</b></p>
    <a href="index.php" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Take Me Home</a>
  </div>
</div>
 <body>

    <?php
      pageFooter();
    ?>
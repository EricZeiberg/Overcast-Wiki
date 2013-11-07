<?php
  include("includes/functions.php")
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Overcast Network Wiki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/style.css" rel="stylesheet" media="screen">
    <link href="assets/css/highlight.css" rel="stylesheet" media="screen">
    <link href="assets/ico/favicon.ico" rel="icon">
  </head>
  <body>
    <?php
      pageHeader("Home");
      ?>
<div class = "container">
      <div class="alert alert-error">
  <button type="button" data-dismiss="alert alert-error">&times;</button>
  <strong>Alert!</strong> The wiki recently underwent a rewrite into PHP. If you find any bugs, report them <a href="https://github.com/MasterEjay/Overcast-Wiki/issues">here</a>.
</div>
</div>
    <div class = "container">
      <div class ="jumbotron">
        <h1>Overcast Network Wiki </h1>
        <p>Your goto place whether you are just starting or an expert on all things OCN</p>
      </div>
    </div>
    <div class="container">
      <div class = "headtext">
        <h2>Welcome</h2>
      </div>
    </div>
    <div class="container">
      <hr>
    </div>
    <div class="container">
      <div class = "subtext">
        <p>Overcast Network is a Minecraft PvP server started in December 2010 by MonsieurApple and Anxuiz. The server runs on the Bukkit API and is powered by many custom plugins, mainly PGM. Overcast also has a website where you can check your <a href="http://oc.tc/stats"> stats</a>, socialize with your friends on <a href="http://oc.tc/forums"> the forums</a> or just check <a href="http://oc.tc/revisions"> the revisions</a> for the latest changes to plugins or the website. You can also go to <a href="http://ocnblog.com">this blog</a> to keep up with the latest news about Overcast Network</p>
      </div>
    </div>
    <div class="container">
      <hr>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php
      pageFooter();
      ?>
  </body>
</html>

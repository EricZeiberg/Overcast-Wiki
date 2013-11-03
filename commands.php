<?php
include("includes/functions.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Overcast Network Wiki - Commands</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/style.css" rel="stylesheet" media="screen">
    <link href="assets/css/highlight.css" rel="stylesheet" media="screen">
    <link href="assets/ico/favicon.ico" rel="icon">
  </head>
  <body>
    <?php
      pageHeader("Commands");
      ?>
    <div class = "container">
      <div class ="jumbotron">
        <h1>Commands</h1>
        <p>All the commands and how to use them</p>
      </div>
    </div>
    <div class="pills">
      <div class="container">
        <div class="tabbable tabs-left">
          <!-- Only required for left/right tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">/join</a></li>
            <li><a href="#tab2" data-toggle="tab">/toggle</a></li>
            <li><a href="#tab3" data-toggle="tab">/report</a></li>
            <li><a href="#tab4" data-toggle="tab">Chat Channels</a></li>
            <li><a href="#tab5" data-toggle="tab">Private MSG</a></li>
            <li><a href="#tab6" data-toggle="tab">Friends</a></li>
            <li><a href="#tab7" data-toggle="tab">/match</a></li>
            <li><a href="#tab8" data-toggle="tab">/map</a></li>
            <li><a href="#tab9" data-toggle="tab">/rot</a></li>
            <li><a href="#tab10" data-toggle="tab">/mapnext</a></li>
            <li><a href="#tab11" data-toggle="tab">/staff</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <strong>/join</strong>
              <strong>Usage:</strong>
              <p>/join [team]</p>
              <strong>About:</strong>
              <p>This is how you join the game</p>
              <strong>Other info:</strong>
              <p>You can only specify a team if you have donated or are the maker of the map currently playing.</p>
            </div>
            <div class="tab-pane" id="tab2">
              <strong>/toggle</strong>
              <strong>Usage:</strong>
              <p>/toggle [setting]</p>
              <strong>About:</strong>
              <p>This changes settings (/settings) specific to you. </p>
              <strong>Blood:</strong>
              <p>See blood when a player gets hurt. (/toggle blood)</p>
              <strong>Death Messages:</strong>
              <p>Death messages displayed to you. (/toggle dms)</p>
              <strong>Join Messages:</strong>
              <p>Join messages displayed to you. (/toggle jms)</p>
              <strong>Observers:</strong>
              <p>See other observers while spectating. (/toggle obs)</p>
              <strong>Picker:</strong>
              <p>Open a helpful GUI for picking classes and teams. (/toggle picker)</p>
              <strong>Punishment Messages:</strong>
              <p>Punishment messages displayed to you. (/toggle punishments)</p>
              <strong>Scoreboard:</strong>
              <p>See the scoreboard with game info. (/toggle scoreboard)</p>
              <strong>Timer:</strong>
              <p>Show remaining time at the top of the screen. (/toggle timer)</p>
            </div>
            <div class="tab-pane" id="tab3">
              <strong>/report</strong>
              <strong>Usage:</strong>
              <p>/report [player] [reason]</p>
              <strong>About:</strong>
              <p>Alerts the staff to the player specified with the reason specified.</p>
              <strong>Other info:</strong>
              <p>Do not report players unnecessarily or misuse the command!</p>
            </div>
            <div class="tab-pane" id="tab4">
              <strong>Global Chat</strong>
              <strong>Usage:</strong>
              <p>/g</p>
              <strong>Team Chat</strong>
              <strong>Usage:</strong>
              <p>/t</p>
              <strong>About:</strong>
              <p>Toggles if your messages are constantly in global chat or team chat.</p>
              <strong>Other info:</strong>
              <p>This does not apply in the Lobby server, and was recently implemented.</p>
            </div>
            <div class="tab-pane" id="tab5">
              <strong>/msg</strong>
              <strong>Usage:</strong>
              <p>/msg [name] [message]</p>
              <strong>About:</strong>
              <p>Sends a message to a certain player. Only that player can see the message</p>
              <strong>Other info:</strong>
              <p>Use /r if you receive a private message to quickly reply to the sender.</p>
            </div>
            <div class="tab-pane" id="tab6">
              <strong>/fr or /friends</strong>
              <strong>Usage:</strong>
              <p>/fr</p>
              <strong>About:</strong>
              <p>Sends you a list of your friends and what server they are currently on, or were last on and how long ago.</p>
              <strong>Other info:</strong>
              <p>To add friends, go to their stats and click add friend.</p>
            </div>
            <div class="tab-pane" id="tab7">
              <strong>/match</strong>
              <strong>Usage:</strong>
              <p>/match</p>
              <strong>About:</strong>
              <p>Sends you info about match time, number of players, score, etc.</p>
              <strong>Other info:</strong>
              <p>N/A</p>
            </div>
            <div class="tab-pane" id="tab8">
              <strong>/map</strong>
              <strong>Usage:</strong>
              <p>/map</p>
              <strong>About:</strong>
              <p>Sends you info about map rules, authors, max players etc.</p>
              <strong>Other info:</strong>
              <p>Make sure you read the map rules before playing any map you don't know!</p>
            </div>
            <div class="tab-pane" id="tab9">
              <strong>/rot</strong>
              <strong>Usage:</strong>
              <p>/rot</p>
              <strong>About:</strong>
              <p>Sends you info about the rotation like next map.</p>
              <strong>Other info:</strong>
              <p>To go to the second page to /rot 2</p>
            </div>
            <div class="tab-pane" id="tab10">
              <strong>/mapnext</strong>
              <strong>Usage:</strong>
              <p>/mapnext</p>
              <strong>About:</strong>
              <p>Tells you the next map on the rotation.</p>
              <strong>Other info:</strong>
              <p>Shortened to <b>/mn</b></p>
            </div>
            <div class="tab-pane" id="tab11">
              <strong>/staff</strong>
              <strong>Usage:</strong>
              <p>/staff [server] [-a]</p>
              <strong>About:</strong>
              <p>Displays staff on the current server, on the specified server, or on all servers if -a is specified.</p>
              <strong>Other info:</strong>
              <p>N/A</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class = "container">
      <hr>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php
      pageFooter();
    ?>
  </body>
</html>

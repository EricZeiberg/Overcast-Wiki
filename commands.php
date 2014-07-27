<?php
include("includes/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Commands - Overcast Network Wiki</title>
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
          <li><a href="#tab12" data-toggle="tab">/find</a></li>
          <li><a href="#tab13" data-toggle="tab">/lookup</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab1">
            <div class="container">
              <div class="col-md-9">
                <strong>/join</strong>
                <strong>Usage:</strong>
                <p>/join [team]</p>
                <strong>About:</strong>
                <p>This is how you join the game</p>
                <strong>Other info:</strong>
                <p>You can only specify a team if you have donated or are an author of the map currently playing.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab2">
            <div class="container">
              <div class="col-md-9">
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
                <strong>Sounds:</strong>
                <p>Turns off/on game sounds that are played to you during a game countdown, when a objective has been compleated or when the match ends.(/toggle sounds)</p>
                <strong>ChatModerator</strong>
                <p>Toggles the sensitivity of ChatModerator, restricting what chat messages you will receive. (/toggle ChatModerator)</p>
                <p>There are three toggleable options:</p>
                <p>None: This is the most passive filter level. You will receive all 'offensive' messages, regardless of intensity. However, you will not receive advertisements or other pre-filtered content.</p>
                <p>Offensive: You will not receive messages that contain excessively vulgar or profane content. This filter is more lenient than the 'all' filter level, but will still weed out particularly toxic chat.</p>
                <p>All: You will not receive messages containing any 'offensive' content (for example, if a single profanity is sent, you won't see it). This is the most 'strict' option, and it is designed for those who are particularly averse to profanity.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab3">
            <div class="container">
              <div class="col-md-9">
                <strong>/report</strong>
                <strong>Usage:</strong>
                <p>/report [player] [reason]</p>
                <strong>About:</strong>
                <p>Alerts the staff to the player specified with the reason specified.</p>
                <strong>Other info:</strong>
                <p>Do not report players unnecessarily or misuse the command!</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab4">
            <div class="container">
              <div class="col-md-9">
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
            </div>
          </div>
          <div class="tab-pane" id="tab5">
            <div class="container">
              <div class="col-md-9">
                <strong>/msg</strong>
                <strong>Usage:</strong>
                <p>/msg [name] [message]</p>
                <strong>About:</strong>
                <p>Sends a message to a certain player. Only that player can see the message</p>
                <strong>Other info:</strong>
                <p>Use /r if you receive a private message to quickly reply to the sender.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab6">
            <div class="container">
              <div class="col-md-9">
                <strong>/fr or /friends</strong>
                <strong>Usage:</strong>
                <p>/fr</p>
                <strong>About:</strong>
                <p>Sends you a list of your friends and what server they are currently on, or were last on and how long ago.</p>
                <strong>Other info:</strong>
                <p>To add friends, go to their stats and click add friend.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab7">
            <div class="container">
              <div class="col-md-9">
                <strong>/match</strong>
                <strong>Usage:</strong>
                <p>/match</p>
                <strong>About:</strong>
                <p>Sends you info about match time, number of players, score, etc.</p>
                <strong>Other info:</strong>
                <p>N/A</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab8">
            <div class="container">
              <div class="col-md-9">
                <strong>/map</strong>
                <strong>Usage:</strong>
                <p>/map</p>
                <strong>About:</strong>
                <p>Sends you info about map rules, authors, max players etc.</p>
                <strong>Other info:</strong>
                <p>Make sure you read the map rules before playing any map you don't know!</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab9">
            <div class="container">
              <div class="col-md-9">
                <strong>/rot</strong>
                <strong>Usage:</strong>
                <p>/rot</p>
                <strong>About:</strong>
                <p>Sends you info about the rotation like next map.</p>
                <strong>Other info:</strong>
                <p>To go to the second page to /rot 2</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab10">
            <div class="container">
              <div class="col-md-9">
                <strong>/mapnext</strong>
                <strong>Usage:</strong>
                <p>/mapnext</p>
                <strong>About:</strong>
                <p>Tells you the next map on the rotation.</p>
                <strong>Other info:</strong>
                <p>Shortened to <b>/mn</b></p>
                <p>Can also use <b>/next</b></p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab11">
            <div class="container">
              <div class="col-md-9">
                <strong>/staff</strong>
                <strong>Usage:</strong>
                <p>/staff [server] [-a]</p>
                <strong>About:</strong>
                <p>Displays staff on the current server, on the specified server, or on all servers if -a is specified.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab12">
            <div class="container">
              <div class="col-md-9">
                <strong>/find</strong>
                <strong>Usage:</strong>
                <p>/find [player]</p>
                <strong>About:</strong>
                <p>
                  If online, shows the specified player's current server, if their settings permit, or their team colour if they are on the same server as the issuer.<br />
                  If offline, shows when a player was last online and how long they have been offline for, as well as what server they were last seen on.
                </p>
                <strong>Other info:</strong>
                <p>The command /seen can also be used to retrieve the same information</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab13">
            <div class="container">
              <div class="col-md-9">
                <strong>/lookup</strong>
                <strong>Usage:</strong>
                <p>/lookup [player]</p>
                <strong>About</strong>
                <p>Returns a list of the player's infractions, including: punisher, punishment type and reason.</p>
                <strong>Other Info:</strong>
                <p>@player can be used to lookup an offline player.</p>
                <strong>Other info:</strong>
                <p>Shortened to <b>/l</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
pageFooter();
?>
</body>
</html>

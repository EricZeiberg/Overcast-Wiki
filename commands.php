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
                <div class="page-header">
                  <h1>/join <small>Join a game</small></h1>
                </div>
                
                <b>Usage:</b>
                <p><kbd>/join [team]</kbd></p>

                <b>Other info:</b>
                <p>You can only specify a team if you have donated or are an author of the map currently playing.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab2">
            <div class="container">
              <div class="col-md-9">
                <div class="page-header">
                  <h1>/toggle <small>Change your settings (See <a href="#settings">/settings</a>)</small></h1>
                </div>
                
                <b>Usage:</b>
                <p><kbd>/toggle [setting]</kbd></p>

                <b>Blood:</b>
                <p>See blood when a player gets hurt. <kbd class="pull-right">/toggle blood</kbd></p>
                <b>Death Messages:</b>
                <p>Death messages displayed to you. <kbd class="pull-right">/toggle dms</kbd></p>
                <b>Join Messages:</b>
                <p>Join messages displayed to you. <kbd class="pull-right">/toggle jms</kbd></p>
                <b>Observers:</b>
                <p>See other observers while spectating. <kbd class="pull-right">/toggle obs</kbd></p>
                <b>Picker:</b>
                <p>Open a helpful GUI for picking classes and teams. <kbd class="pull-right">/toggle picker</kbd></p>
                <b>Punishment Messages:</b>
                <p>Punishment messages displayed to you. <kbd class="pull-right">/toggle punishments</kbd></p>
                <b>Scoreboard:</b>
                <p>See the scoreboard with game info. <kbd class="pull-right">/toggle scoreboard</kbd></p>
                <b>Timer:</b>
                <p>Show remaining time at the top of the screen. <kbd class="pull-right">/toggle timer</kbd></p>
                <b>Sounds:</b>
                <p>Turns off/on game sounds that are played to you during a game countdown, when a objective has been compleated or when the match ends.<kbd class="pull-right">/toggle sounds</kbd></p>
                <b>ChatModerator</b>
                <p>Toggles the sensitivity of ChatModerator, restricting what chat messages you will receive. <kbd class="pull-right">/toggle ChatModerator</kbd></p>
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
                <div class="page-header">
                  <h1>/report <small>Report a player to the staff</small></h1>
                </div>

                <b>Usage:</b>
                <p><kbd>/report [player] [reason]</kbd></p>

                <b>Other info:</b>
                <p>Do not report players unnecessarily or misuse the command!</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab4">
            <div class="container">
              <div class="col-md-9">
                <div class="page-header">
                  <h1>Chat Channels <small>Change your settings (See <a href="#settings">/settings</a>)</small></h1>
                </div>
                <b>Usage:</b>

                <p><b>Global Chat: </b><kbd>/g</kbd></p>
                <p><b>Team Chat: </b><kbd>/t</kbd></p>

                <b>About:</b>
                <p>Toggles if your messages are constantly in global chat or team chat.</p>
                <b>Other info:</b>
                <p>This does not apply in the Lobby server, and was recently implemented.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab5">
            <div class="container">
              <div class="col-md-9">
                <div class="page-header">
                  <h1>/msg <small>Sends a private message to a player</small></h1>
                </div>
                
                <b>Usage:</b>
                <p><kbd>/msg [name] [message]</kbd></p>

                <b>Other info:</b>
                <p>Use <kbd>/r</kbd> if you receive a private message to quickly reply to the sender.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab6">
            <div class="container">
              <div class="col-md-9">
                <b>/fr or /friends</b>
                <b>Usage:</b>
                <p>/fr</p>
                <b>About:</b>
                <p>Sends you a list of your friends and what server they are currently on, or were last on and how long ago.</p>
                <b>Other info:</b>
                <p>To add friends, go to their stats and click add friend.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab7">
            <div class="container">
              <div class="col-md-9">
                <b>/match</b>
                <b>Usage:</b>
                <p>/match</p>
                <b>About:</b>
                <p>Sends you info about match time, number of players, score, etc.</p>
                <b>Other info:</b>
                <p>N/A</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab8">
            <div class="container">
              <div class="col-md-9">
                <b>/map</b>
                <b>Usage:</b>
                <p>/map</p>
                <b>About:</b>
                <p>Sends you info about map rules, authors, max players etc.</p>
                <b>Other info:</b>
                <p>Make sure you read the map rules before playing any map you don't know!</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab9">
            <div class="container">
              <div class="col-md-9">
                <b>/rot</b>
                <b>Usage:</b>
                <p>/rot</p>
                <b>About:</b>
                <p>Sends you info about the rotation like next map.</p>
                <b>Other info:</b>
                <p>To go to the second page to /rot 2</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab10">
            <div class="container">
              <div class="col-md-9">
                <b>/mapnext</b>
                <b>Usage:</b>
                <p>/mapnext</p>
                <b>About:</b>
                <p>Tells you the next map on the rotation.</p>
                <b>Other info:</b>
                <p>Shortened to <b>/mn</b></p>
                <p>Can also use <b>/next</b></p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab11">
            <div class="container">
              <div class="col-md-9">
                <b>/staff</b>
                <b>Usage:</b>
                <p>/staff [server] [-a]</p>
                <b>About:</b>
                <p>Displays staff on the current server, on the specified server, or on all servers if -a is specified.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab12">
            <div class="container">
              <div class="col-md-9">
                <b>/find</b>
                <b>Usage:</b>
                <p>/find [player]</p>
                <b>About:</b>
                <p>
                  If online, shows the specified player's current server, if their settings permit, or their team colour if they are on the same server as the issuer.<br />
                  If offline, shows when a player was last online and how long they have been offline for, as well as what server they were last seen on.
                </p>
                <b>Other info:</b>
                <p>The command /seen can also be used to retrieve the same information</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab13">
            <div class="container">
              <div class="col-md-9">
                <b>/lookup</b>
                <b>Usage:</b>
                <p>/lookup [player]</p>
                <b>About</b>
                <p>Returns a list of the player's infractions, including: punisher, punishment type and reason.</p>
                <b>Other Info:</b>
                <p>@player can be used to lookup an offline player.</p>
                <b>Other info:</b>
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

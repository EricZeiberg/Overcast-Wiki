<?php

function assets() {
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Jquery -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="assets/js/bootstrap.min.js"></script>

	<link href="assets/css/style.css" rel="stylesheet" media="screen">
	<link href="assets/css/highlight.css" rel="stylesheet" media="screen">
	<link href="assets/ico/favicon.ico" rel="icon">
	<?php
}

function pageFooter() {
	?>
	<hr>
	<div class="container">
		<footer class="footer">
			<div class="row">
				<div class="pull-left col-md-2">
					<b>Overcast Network Wiki</b>
				</div>
				<div class="pull-right col-md-3" style="text-align:right;">
					<a href="http://oc.tc">Overcast Network Website</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					NOTE: This wiki is unofficial and is not affiliated or endorsed by Overcast Network
				</div>
				<div class="pull-right col-md-2" style="text-align:right;">
					<a href="https://github.com/MasterEjay/Overcast-Wiki">GitHub Repository</a>
				</div>
			</div>
			<div class="row">
				<div class="pull-right col-md-2" style="text-align:right;">
					<a href="contributors.php">Contributors</a>
				</div>
			</div>
		</footer>
	</div>
	<?php
}

function pageHeader($selected) {
	########################################
	#This is the bit you edit for new links#
	########################################
	$links = array(
		"Home" => array(
			"href" => "index.php",
			"icon" => "home",
			"type" => "main",
			),
		"Gamemodes" => array(
			"href" => "gamemodes.php",
			"icon" => "play",
			"type" => "main",
			),
		"Rules" => array(
			"href" => "https://oc.tc/rules/en",
			"icon" => "exclamation-sign",
			"type" => "external",
			),
		"Commands" => array(
			"href" => "commands.php",
			"icon" => "cog",
			"type" => "main",
			),
		"PvP Tips" => array(
			"href" => "tips.php",
			"icon" => "ok",
			"type" => "main",
			),
		"Tournaments" => array(
			"href" => "tourney.php",
			"icon" => "bullhorn",
			"type" => "main",
			),
		"Ranks" => array(
			"href" => "ranks.php",
			"icon" => "star-empty",
			"type" => "dropdown",
			),
		"IRC" => array(
			"href" => "irc.php",
			"icon" => "comment",
			"type" => "dropdown",
			),
		);
	########################################
	#You don't need to edit past this point#
	########################################
		?>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="assets/img/small.png"> Overcast Network Wiki</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php
						foreach ($links as $l => $i) {
							if ($i['type'] == "main" || $i['type'] == "external") {
								if ($i['type'] == "external") {
									$externallink = " target=\"_blank\"";
								} else {
									$externallink = "";
								}
								if ($selected == $l) {
									$section = "<li class=\"active\"><a href=\"".$i['href']."\"" . $externallink . "><span class=\"glyphicon glyphicon-" . $i['icon'] . "\"></span>  ".$l."</a></li>\n";
								} else {
									$section = "<li><a href=\"".$i['href']."\"" . $externallink . "><span class=\"glyphicon glyphicon-" . $i['icon'] . "\"></span>  " . $l . "</a></li>\n";
								}
								echo $section;
							}
						}
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span>   More <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php
								foreach ($links as $l => $i) {
									if ($i['type'] == "dropdown") {
										$section = "<li><a href=\"".$i['href']."\"><span class=\"glyphicon glyphicon-" . $i['icon'] . "\"></span>  ".$l."</a></li>\n";
										echo $section;
									}       
								}
								?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<?php
	}
	?>

<?php

function pageFooter()
{
	?>
	<div class="container">
		<footer class="footer">
			<ul class="nav nav-pills">
				<li class="pull-left">
					<a>Overcast Network Wiki</a>
				</li>
				<li class="note">
					<a>NOTE: This wiki is unofficial and is not affiliated or endorsed by Overcast Network</a>
				</li>
				<li class ="pull-right" >
					<a href="http://oc.tc">Overcast Network Website</a>
				</li>
				<li class ="pull-right" >
					<a href="https://github.com/MasterEjay/Overcast-Wiki">GitHub Repository</a>
				</li>
				<li class ="pull-right" >
					<a href="contributors.php">Contributors</a>
				</li>
			</ul>
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

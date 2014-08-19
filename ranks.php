<?php include("includes/functions.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ranks - Overcast Network Wiki</title>
	<?php assets(); ?>
</head>
<body>
	<?php pageHeader("ranks"); ?>
	<div class="container">
		<div class ="jumbotron">
			<h1>Ranks</h1>
			<p>All the ranks on OCN. (Written by GoodBobul and ParaSpider, Updated by Ezekiel)</p>
		</div>
		<?php
		$ranks = json_decode(file_get_contents('ranks.json'),true);
		foreach ($ranks as $type => $type_ranks) {
			?>
			<div class="container">
				<h2><?php echo $type; ?></h2>
			</div>
			<?php
			foreach ($type_ranks as $index => $rank) {
				?>
				<div class="media">
					<a class="pull-left" href="#">
						<span class="label" style="background-color: <?php echo $rank['background-color']; ?>; color: <?php echo $rank['color']; ?>"><?php echo $rank['title']; ?></span>
					</a>
					<div class="media-body">
						<h4 class="media-heading"><?php echo $rank['title']; ?></h4>
						<p><?php echo $rank['body']; ?></p>
						<p>Example: <a target="_" href="/assets/img/ranks/<?php echo $rank['example']; ?>.png"><?php echo $rank['example']; ?></a></p>
					</div>
					<hr>
				</div>
				<?php
			}
		}
		?>
		<div class="media">
			<div class = "container">
				<a class="pull-left" href="#">
					<span class="label" style="background-color: #A00; color: white">Senior Moderator</span>
				</a>
				<div class="media-body">
					<h4 class="media-heading">Senior Moderator</h4>
					<p>Senior Moderators are former moderators who are given a rank similar to administrator in which lets them moderate the forums. They get a dark-red flair in game and a maroon badge on the site. </p>
					<p>Example: <a href="https://oc.tc/PandaBattalion">PandaBattalion</a></p>
				</div>
			</div>
		</div>
		<hr>
		<div class="media">
			<a class="pull-left" href="#">
				<span class="label" style="background-color: #A00; color: white">Supreme Overlord</span>
			</a>
			<div class="media-body">
				<h4 class="media-heading">Supreme Overlord</h4>
				<p>The two Supreme Overlords are long-time friends of MonsieurApple. They have the same abilities as administrators.</p>
				<p>Examples: <a href="https://oc.tc/McYukon">McYukon</a> &amp; <a href="https://oc.tc/McSpider">McSpider</a>.</p>
			</div>
		</div>
		<hr>
		<div class="media">
			<a class="pull-left" href="#">
				<span class="label" style="background-color: blue; color: white">Map Developer</span>
			</a>
			<div class="media-body">
				<h4 class="media-heading">Map Developer</h4>
				<p>Map Developers are highly trusted people that have access to what maps can be added and what maps cannot. They have full access to the maps repo on Github, and they get their own servers to where they can test them. They are represented by a blue badge but do not get a flair in-game.</p>
				<p>Example: <a href="https://oc.tc/ElectroidFilms">ElectroidFilms</a></p>
			</div>
		</div>
		<hr>
		<div class="media">
			<a class="pull-left" href="#">
				<span class="label" style="background-color: darkcyan; color: white">Event Coordinator</span>
			</a>
			<div class="media-body">
				<h4 class="media-heading">Event Coordinator</h4>
				<p>The Event Coordinator rank is for the main people who make official events happen. They manage the referees and livestreamers, and manage the event itself to make sure it's a fair and fun environment. They were called 'Senior Referees', 'Tournament', 'Tournament Organiser' and 'Cyan People' in the past.</p>
				<p>Example: <a href="https://oc.tc/BrettOgden">BrettOgden</a></p>
			</div>
			<hr>
			<div class="media">
				<a class="pull-left" href="#">
					<span class="label" style="background-color: teal; color: white">Referee</span>
				</a>
				<div class="media-body">
					<h4 class="media-heading">Referee</h4>
					<p>The referees are supervisors of the event to make sure there are no cheaters with the ability to notify a senior referee at a moment's notice. They are prioritized with assisting the tournament. Referee is a permanent rank, and applications are only opened when additional referees are required; previously, referee was a temporary rank and applications were opened for each tournament.</p>
					<p>Examples: <a href="http://i.imgur.com/swC0YHT.png">Plastix</a></p>
				</div>
			</div>
		</div>
	</div>
	<?php pageFooter(); ?>
</body>
</html>

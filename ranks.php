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
						<?php
						if (is_array($rank['example'])) {
							echo '<p>Examples: ';
							foreach ($rank['example'] as $index => $user) {
								?>
									<a target="_" href="/assets/img/ranks/<?php echo $rank['example'][$index]; ?>.png"><?php echo $rank['example'][$index]; ?></a>
								<?php
							}
							echo '</p>';
						} else {
							?>
							<p>Example: <a target="_" href="/assets/img/ranks/<?php echo $rank['example']; ?>.png"><?php echo $rank['example']; ?></a></p>
							<?php
						}
						?>
					</div>
					<hr>
				</div>
				<?php
			}
		}
		?>
	</div>
	<?php pageFooter(); ?>
</body>
</html>

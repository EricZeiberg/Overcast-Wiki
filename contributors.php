<?php
include("includes/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contributors - Overcast Network Wiki</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
	<link href="assets/css/highlight.css" rel="stylesheet" media="screen">
	<link href="assets/ico/favicon.ico" rel="icon">
	<style>
		.row {
			margin-top: 5px;
			margin-bottom: 5px;
		}
		a {
			color: black;
		}
	</style>
</head>
<body>
	<?php
	pageHeader("Home");
	?>
	<div class="container">
		<div class="jumbotron">
			<h1>Contributors</h1>
			<p>The people who have helped make this wiki</p>
		</div>
		<?php
		$contributors = array(
			'MonsieurApple',
			'MasterEjzz',
			'stupid3700',
			'MathyBoy98',
			'Troyter',
			'applenick3',
			'PhoenixMatt',
			'TheMasterCow',
			'Oversoul96',
			'mdahlgren',
			'goodbobul',
			'zacharycraft777',
			'BobRingard',
			'ezekielelin'
			);
		foreach ($contributors as $index => $contributor) {
			if ($index % 3 == 0) {
				echo '<div class="row">';
			}
			?>
			<div class="col-md-4" class="contributor">
				<a href="http://oc.tc/<?php echo $contributor; ?>">
					<div class="col-md-6" style="padding:0px;">
						<img src="https://avatar.oc.tc/<?php echo $contributor ?>/128.png" alt="<?php echo $contributor ?>">
					</div>
					<div class="col-md-6" style="padding:0px;">
						<h4><?php echo $contributor ?></h4>
					</div>
				</a>
			</div>
			<?php
			if ($index % 3 == 2) {
				echo '</div>';
			}
		}
		?>
	</div>
	<hr>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript"></script>
	<?php
	pageFooter();
	?>
</body>
</html>

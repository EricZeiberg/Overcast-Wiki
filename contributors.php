<?php include("includes/functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contributors - Overcast Network Wiki</title>
	<?php assets(); ?>	
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
		####################################################
		#Add your minecraft username to the end of the list#
		####################################################
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
		shuffle($contributors);
		foreach ($contributors as $index => $contributor) {
			if ($index % 3 == 2) {
				echo '<div class="row">';
			}
			#######################################
			#Do not edit this part to add yourself#
			#######################################
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
	<?php pageFooter(); ?>
</body>
</html>

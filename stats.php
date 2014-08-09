<?php include 'backbone.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pizza Time (beta)</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="container">
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">AOE</a>
		</div>
		<div class="navbar-collapse collapse" style="height: 1px;">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Stats</a></li>
				<li><a href="gear.php">Gear</a></li>
				<li><a href="wins.php">Wins</a></li>
				<li><a href="caps.php">Caps</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
	<!--end of nav-->
	<div class="name-banner-cont well">
		<div class="name-banner-icon">
			<img class="img-thumbnail" src=<?php echo($avatar); ?>/>
		</div>
		<div class="name-banner-info">
			<h3 class="name-banner-name"><?php echo($name." (".$server.")"); ?></h3>
			<text class="name-banner-fc">Free Company: <?php echo($freeCompany); ?></text><br/>
			<text><?php echo($activeJob.": ".$activeLevel); ?></text><br/>
			<text>iLevel: <?php echo($iLevel); ?></text>
		</div>
		<div class="name-banner-badges">
			<?php
				if(is_float($stars))
				{
					echo("<img src='images/halfstar.png'/>");
				}
				$round_stars = round($stars, 0, PHP_ROUND_HALF_DOWN);
				for($i=1;$i<=$round_stars;$i++)
				{
					echo("<img src='images/star.png'/>");
				}
			?>
		</div>
	</div>
	<!--end of name banner-->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Player Stats</h3>
		</div>
		<div class="panel-body">
			<div class="core-stats-bar">
				<h1>
					<span class="label label-danger">HP: <?php echo($hp); ?></span>
					<span class="label label-info">MP: <?php echo($mp); ?></span>
					<span class="label label-success">TP: <?php echo($tp); ?></span>
				</h1>
			</div>
			<!-- Begin Attributes Table -->
			<div class="row">
				<div class='col-md-6'>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Attributes</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Strength</td>
								<td><?php echo($strength); ?></td>
							</tr>
							<tr>
								<td>Vitality</td>
								<td><?php echo($vitality); ?></td>
							</tr>
							<tr>
								<td>Dexterity</td>
								<td><?php echo($dexterity); ?></td>
							</tr>
							<tr>
								<td>Intelligence</td>
								<td><?php echo($intelligence); ?></td>
							</tr>
							<tr>
								<td>Mind</td>
								<td><?php echo($mind); ?></td>
							</tr>
							<tr>
								<td>Piety</td>
								<td><?php echo($piety); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Begin Elemental Table -->
				<div class='col-md-6'>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Elements</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Fire</td>
								<td><?php echo($fire); ?></td>
							</tr>
							<tr>
								<td>Ice</td>
								<td><?php echo($ice); ?></td>
							</tr>
							<tr>
								<td>Wind</td>
								<td><?php echo($wind); ?></td>
							</tr>
							<tr>
								<td>Earth</td>
								<td><?php echo($earth); ?></td>
							</tr>
							<tr>
								<td>Lightning</td>
								<td><?php echo($lightning); ?></td>
							</tr>
							<tr>
								<td>Water</td>
								<td><?php echo($water); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Type</th>
								<th>Stats</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td rowspan="3">Offense</td>
								<td>Accuracy</td>
								<td><?php echo($accuracy); ?></td>
							</tr>
							<tr>
								<td>Critical Hit Rate</td>
								<td><?php echo($criticalHitRate); ?></td>
							</tr>
							<tr>
								<td>Determination</td>
								<td><?php echo($determination); ?></td>
							</tr>
							<tr>
								<td rowspan="3">Defense</td>
								<td>Defense</td>
								<td><?php echo($defense); ?></td>
							</tr>
							<tr>
								<td>Parry</td>
								<td><?php echo($parry); ?></td>
							</tr>
							<tr>
								<td>Magic Defense</td>
								<td><?php echo($magicDefense); ?></td>
							</tr>
							<tr>
								<td rowspan="2">Physical</td>
								<td>Attack Power</td>
								<td><?php echo($attackPower); ?></td>
							</tr>
							<tr>
								<td>Skill Speed</td>
								<td><?php echo($skillSpeed); ?></td>
							</tr>
							<tr>
								<td rowspan="3">Defense</td>
								<td>Attack Magic Potency</td>
								<td><?php echo($attackMagicPotency); ?></td>
							</tr>
							<tr>
								<td>Healing Magic Potency</td>
								<td><?php echo($healingMagicPotency); ?></td>
							</tr>
							<tr>
								<td>Spell Speed</td>
								<td><?php echo($spellSpeed); ?></td>
							</tr>
							<tr>
								<td>PvP</td>
								<td>Morale</td>
								<td><?php echo($morale); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Level</th>
							<th>Progress</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($jobs as $key=>$value)
							{
								echo(
									"<tr>".
										"<td>".ucwords($value[0])."</td>".
										"<td>".$value[1]."</td>".
										"<td>");
										if($value[3] > 0)
										{
											echo(round(($value[2]/$value[3])*100, 0)."%");
										}
										else
										{
											echo("Max");
										}
										echo(
										"</td>".
									"</tr>"
								);
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
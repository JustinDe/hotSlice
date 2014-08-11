<?php 
include 'backbone.php'; 

$API->parseAchievementsByCategory(1,$Character->getID());
$achi_parse = $API->getAchievements()[1];

if($achi_parse->getTotalPoints())
{
	$trials = trials_won($achi_parse);
	$raids = raids_won($achi_parse);
}
else
{
	$trials = array_fill(0, 6, 2);
	$raids = array_fill(0, 4, 2);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HotSlice(beta)</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="images/pizzaicon.png"/>
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
			<a class="navbar-brand" href="index.php">Hot Slice</a>
		</div>
		<div class="navbar-collapse collapse" style="height: 1px;">
			<ul class="nav navbar-nav">
				<li><a href="stats.php">Stats</a></li>
				<li><a href="gear.php">Gear</a></li>
				<li class="active"><a href="#">Wins</a></li>
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
			<h3 class="panel-title">Raids</h3>
		</div>
		<div class="panel-body">
		<!-- panel body starts here -->	
			<div class="col-md-12">
          		<table class="table table-bordered">
					<thead>
						<tr>
							<th>Raid</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Coil 1-5</td>
							<td>
								<?php
									if($raids[0] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($raids[0] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Coil 6-9</td>
							<td>
								<?php
									if($raids[1] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($raids[1] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Labyrinth of the Ancients</td>
							<td>
								<?php
									if($raids[2] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($raids[2] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Syrcus Tower</td>
							<td>
								<?php
									if($raids[3] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($raids[3] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Trails</h3>
		</div>
		<div class="panel-body">
		<!-- panel body starts here -->	
			<div class='col-md-12'>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Trial</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ifrit Extreme</td>
							<td>
								<?php
									if($trials[0] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($trials[0] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Garuda Extreme</td>
							<td>
								<?php
									if($trials[1] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($trials[1] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Titan Extreme</td>
							<td>
								<?php
									if($trials[2] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($trials[2] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Leviathan Extreme</td>
							<td>
								<?php
									if($trials[3] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($trials[3] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Moogles Extreme</td>
							<td>
								<?php
									if($trials[4] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($trials[4] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Ramuh Extreme</td>
							<td>
								<?php
									if($trials[5] == 1)
									{
										echo("<span class='label label-success'>Complete</span>");
									}
									elseif($trials[5] == 0)
									{
										echo("<span class='label label-danger'>Incomplete</span>");
									}
									else
									{
										echo("<span class='label label-warning'>Hidden</span>");
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
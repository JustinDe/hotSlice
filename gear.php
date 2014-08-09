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
				<li><a href="stats.php">Stats</a></li>
				<li class="active"><a href="#">Gear</a></li>
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
		<div class="panel-body col-md-12">
		<!-- panel body starts here -->		
			<div class="col-md-12">
	          <table class="table table-bordered">
	            <thead>
	              <tr>
	                <th>Slot</th>
	                <th>Item Name</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td>Main Hand</td>
	                <td><?php echo($main); ?></td>
	              </tr>
	              <tr>
	                <td>Off Hand</td>
	                <td><?php echo($shield); ?></td>
	              </tr>
	              <tr>
	                <td>Head</td>
	                <td><?php echo($head); ?></td>
	              </tr>
	              <tr>
	                <td>Body</td>
	                <td><?php echo($body); ?></td>
	              </tr>
	              <tr>
	                <td>Waist</td>
	                <td><?php echo($waist); ?></td>
	              </tr>
	              <tr>
	                <td>Legs</td>
	                <td><?php echo($legs); ?></td>
	              </tr>
	              <tr>
	                <td>Necklace</td>
	                <td><?php echo($necklace); ?></td>
	              </tr>
	              <tr>
	                <td>Earrings</td>
	                <td><?php echo($earrings); ?></td>
	              </tr>
	              <tr>
	                <td>Bracelets</td>
	                <td><?php echo($bracelets); ?></td>
	              </tr>
	              <tr>
	                <td>Ring 1</td>
	                <td><?php echo($ring); ?></td>
	              </tr>
	              <tr>
	                <td>Ring 2</td>
	                <td><?php echo($ring2); ?></td>
	              </tr>
	            </tbody>
	          </table>
	        </div>
		</div>
	</div>
</body>
</html>
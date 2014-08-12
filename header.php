<head>
	<meta charset="UTF-8">
	<title>HotSlice(beta)</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="bootstrap/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="images/pizzaicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body class="container">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Hot Slice</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li id="mi-stats" class=""><a href="stats.php">Stats</a></li>
					<li id="mi-gear" class=""><a href="gear.php">Gear</a></li>
					<li id="mi-wins" class=""><a href="wins.php">Wins</a></li>
					<li id="mi-caps" class=""><a href="caps.php">Caps</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
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
	</div>
	<!--end of name banner-->
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
				<li><a href="gear.php">Gear</a></li>
				<li><a href="gear.php">Wins</a></li>
				<li class="active"><a href="#">Caps</a></li>
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
			<h3 class="panel-title">Caps</h3>
		</div>
		<div class="panel-body col-md-12">
		<!-- panel body starts here -->	
		
		<div class="col-md-12">
	          <table class="table table-bordered">
	            <thead>
	              <tr>
	                <th>Encounter</th>
	                <th>iLevel</th>
	                <th>Accuracy</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td>Coil Turn 1</td>
	                <td>
	                	<?php
	                		if($iLevel >= 70)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/70</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/70</span>");
	                		}
	                	?>
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 470)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/470</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/470</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 430)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/430</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/430</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Coil Turn 2</td>
	                <td>
	                	<?php
	                		if($iLevel >= 73)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/73</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/73</span>");
	                		}
	                	?>
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 470)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/470</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/470</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 430)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/430</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/430</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Coil Turn 3</td>
	                <td>
	                	<?php
	                		if($iLevel >= 70)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/70</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/70</span>");
	                		}
	                	?>
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 470)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/470</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/470</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 430)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/430</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/430</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Coil Turn 4</td>
	                <td>
	                	<?php
	                		if($iLevel >= 77)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/77</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/77</span>");
	                		}
	                	?>
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 470)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/470</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/470</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 430)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/430</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/430</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Coil Turn 5</td>
	                <td>
	                	<?php
	                		if($iLevel >= 82)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/82</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/82</span>");
	                		}
	                	?>
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 480)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/480</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/480</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 450)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/450</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/450</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Coil Turn 6</td>
	                <td>
	                	TBA
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 490)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/490</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/490</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 455)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/455</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/455</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
                	</td>
	              </tr>
	              <tr>
	                <td>Coil Turn 7</td>
	                <td>
	                	TBA
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 493)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/493</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/493</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 455)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/455</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/455</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Coil Turn 8</td>
	                <td>
	                	TBA
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 493)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/493</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/493</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 471)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/471</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/471</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Coil Turn 9</td>
	                <td>
	                	TBA
	                </td>
	                <td>
	                	<?php
	                		if($dis == "dow")
	                		{
	                			if($accuracy >= 515)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/515</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/515</span>");
	                			}
	                		}
	                		if($dis == "dom")
	                		{
	                			if($accuracy >= 470)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/470</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/470</span>");
	                			}
	                		}
	                		if($dis == "idk")
	                		{
	                			echo("<span class='label label-warning'>N/A</span>");
	                		}
	                	?>
	                </td>
	              </tr>
	              <tr>
	                <td>Ifrit Extreme</td>
	                <td>
	                	<?php
	                		if($iLevel >= 70)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/70</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/70</span>");
	                		}
	                	?>
	                </td>
	                <td>
            			<span class='label label-warning'>N/A</span>
	                </td>
	              </tr>
	              <tr>
	                <td>Garuda Extreme</td>
	                <td>
	                	<?php
	                		if($iLevel >= 65)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/65</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/65</span>");
	                		}
	                	?>
	                </td>
	                <td>
            			<span class='label label-warning'>N/A</span>
	                </td>
	              </tr>
	              <tr>
	                <td>Titan Extreme</td>
	                <td>
	                	<?php
	                		if($iLevel >= 67)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/67</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/67</span>");
	                		}
	                	?>
	                </td>
	                <td>
            			<span class='label label-warning'>N/A</span>
	                </td>
	              </tr>
	              <tr>
	                <td>Leviathan Extreme</td>
	                <td>
	                	<?php
	                		if($iLevel >= 80)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/80</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/80</span>");
	                		}
	                	?>
	                </td>
	                <td>
            			<span class='label label-warning'>N/A</span>
	                </td>
	              </tr>
	              <tr>
	                <td>Moogles Extreme</td>
	                <td>
	                	<?php
	                		if($iLevel >= 80)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/80</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/80</span>");
	                		}
	                	?>
	                </td>
	                <td>
            			<span class='label label-warning'>N/A</span>
	                </td>
	              </tr>
	              <tr>
	                <td>Ramuh Extreme</td>
	                <td>
	                	<?php
	                		if($iLevel >= 85)
	                		{
	                			echo("<span class='label label-success'>Pass: ".$iLevel."/85</span>");
	                		}
	                		else
	                		{
	                			echo("<span class='label label-danger'>Fail: ".$iLevel."/85</span>");
	                		}
	                	?>
	                </td>
	                <td>
            			<span class='label label-warning'>N/A</span>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	        </div>







		</div>
	</div>
</body>
</html>
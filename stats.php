<?php 
include 'backbone.php'; 

//---------Stats--------
//core
$hp = $Character->getStat('core', 'hp');
$mp = $Character->getStat('core', 'mp');
$tp = $Character->getStat('core', 'tp');
//attributes
$strength = $Character->getStat('attributes', 'strength');
$vitality = $Character->getStat('attributes', 'vitality');
$dexterity = $Character->getStat('attributes', 'dexterity');
$intelligence = $Character->getStat('attributes', 'intelligence');
$mind = $Character->getStat('attributes', 'mind');
$piety = $Character->getStat('attributes', 'piety');
//elemental
$fire = $Character->getStat('elemental', 'fire');
$ice = $Character->getStat('elemental', 'ice');
$wind = $Character->getStat('elemental', 'wind');
$earth = $Character->getStat('elemental', 'earth');
$lightning = $Character->getStat('elemental', 'lightning');
$water = $Character->getStat('elemental', 'water');
//offense
$accuracy = $Character->getStat('offense', 'accuracy');
$criticalHitRate = $Character->getStat('offense', 'critical hit rate');
$determination = $Character->getStat('offense', 'determination');
//defense
$defense = $Character->getStat('defense', 'defense');
$parry = $Character->getStat('defense', 'parry');
$magicDefense = $Character->getStat('defense', 'magic defense');
//physical
$attackPower = $Character->getStat('physical', 'attack power');
$skillSpeed = $Character->getStat('physical', 'skill speed');
//resists
$slashing = $Character->getStat('resists', 'slashing');
$piercing = $Character->getStat('resists', 'piercing');
$blunt = $Character->getStat('resists', 'blunt');
//crafting
$craftsmanship = $Character->getStat('crafting', 'craftsmanship');
$control = $Character->getStat('crafting', 'control');
//spell
$attackMagicPotency = $Character->getStat('spell', 'attack magic potency');
$healingMagicPotency = $Character->getStat('spell', 'healing magic potency');
$spellSpeed = $Character->getStat('spell', 'spell speed');
//pvp
$morale = $Character->getStat('pvp', 'morale');
//gathering
$gathering = $Character->getStat('gathering', 'gathering');
$perception = $Character->getStat('gathering', 'perception');


?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'header.php'; ?>
	<script type="text/javascript">
		var d = document.getElementById("mi-stats");
		d.className = d.className + "active";
	</script>
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
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-36503187-2', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>
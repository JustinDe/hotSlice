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
	<?php include 'header.php'; ?>
	<script type="text/javascript">
		var d = document.getElementById("mi-wins");
		d.className = d.className + "active";
	</script>
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
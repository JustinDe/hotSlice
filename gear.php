<?php 
	include 'backbone.php'; 
	//---------Gear List------------
	$main = $Character->getSlot('main')['name'];
	$shield = $Character->getSlot('shield')['name'];
	$head = $Character->getSlot('head')['name'];
	$body = $Character->getSlot('body')['name'];
	$waist = $Character->getSlot('waist')['name'];
	$legs = $Character->getSlot('legs')['name'];
	$feet = $Character->getSlot('feet')['name'];
	$necklace = $Character->getSlot('necklace')['name'];
	$earrings = $Character->getSlot('earrings')['name'];
	$bracelets = $Character->getSlot('bracelets')['name'];
	$ring = $Character->getSlot('ring')['name'];
	$ring2 = $Character->getSlot('ring2')['name'];
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'header.php'; ?>
	<script type="text/javascript">
		var d = document.getElementById("mi-gear");
		d.className = d.className + "active";
	</script>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Player Gear</h3>
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
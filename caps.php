<?php 
include 'backbone.php'; 
$accuracy = $Character->getStat('offense', 'accuracy');
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'header.php'; ?>
	<script type="text/javascript">
		var d = document.getElementById("mi-caps");
		d.className = d.className + "active";
	</script>
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 472)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/472</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/472</span>");
	                			}
	                		}
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 460)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/460</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/460</span>");
	                			}
	                		}
	                		if($dis == "mage")
	                		{
	                			if($accuracy >= 432)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/432</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/432</span>");
	                			}
	                		}
	                		if($dis == "other")
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 475)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/475</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/475</span>");
	                			}
	                		}
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 460)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/460</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/460</span>");
	                			}
	                		}
	                		if($dis == "mage")
	                		{
	                			if($accuracy >= 432)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/432</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/432</span>");
	                			}
	                		}
	                		if($dis == "other")
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 472)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/472</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/472</span>");
	                			}
	                		}
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 460)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/460</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/460</span>");
	                			}
	                		}
	                		if($dis == "mage")
	                		{
	                			if($accuracy >= 432)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/432</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/432</span>");
	                			}
	                		}
	                		if($dis == "other")
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 472)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/472</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/472</span>");
	                			}
	                		}
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 460)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/460</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/460</span>");
	                			}
	                		}
	                		if($dis == "mage")
	                		{
	                			if($accuracy >= 432)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/432</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/432</span>");
	                			}
	                		}
	                		if($dis == "other")
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 486)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/486</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/486</span>");
	                			}
	                		}
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 472)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/472</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/472</span>");
	                			}
	                		}
	                		if($dis == "mage")
	                		{
	                			if($accuracy >= 432)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/432</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/432</span>");
	                			}
	                		}
	                		if($dis == "other")
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 489)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/489</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/489</span>");
	                			}
	                		}
	                		if($dis == "flank")
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
	                		if($dis == "mage")
	                		{
	                			if($accuracy >= 451)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/451</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/451</span>");
	                			}
	                		}
	                		if($dis == "other")
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 495)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/495</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/495</span>");
	                			}
	                		}
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 481)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/481</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/481</span>");
	                			}
	                		}
	                		if($dis == "mage")
	                		{
	                			if($accuracy >= 451)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/451</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/451</span>");
	                			}
	                		}
	                		if($dis == "other")
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
	                		if($dis == "tank")
	                		{
	                			if($accuracy >= 513)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/513</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/513</span>");
	                			}
	                		}
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 491)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/491</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/491</span>");
	                			}
	                		}
	                		if($dis == "mage")
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
	                		if($dis == "other")
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
	                		if($dis == "tank")
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
	                		if($dis == "flank")
	                		{
	                			if($accuracy >= 491)
	                			{
	                				echo("<span class='label label-success'>Pass: ".$accuracy."/491</span>");
	                			}
	                			else
	                			{
	                				echo("<span class='label label-danger'>Fail: ".$accuracy."/491</span>");
	                			}
	                		}
	                		if($dis == "mage")
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
	                		if($dis == "other")
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
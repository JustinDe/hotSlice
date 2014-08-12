<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HotSlice(beta)</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="bootstrap/js/jquery-2.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="images/pizzaicon.png"/>
</head>
<body class="container">
	<div class="col-md-4 col-md-offset-4 search-area">
		<img src="images/pizza.jpg"/>
		<h1>Hot Slice</h1>
		<form class="navbar-form navbar-left" role="search" method="post" action="search.php">
			<input type="text" class="form-control search-text" name="firstName" placeholder="First Name">
			<input type="text" class="form-control search-text" name="lastName" placeholder="Last Name">
			<br/><select class="form-control server-list" name="server">
				<option value="Aegis">Aegis</option>
				<option value="Adamantoise">Adamantoise</option>
				<option value="Alexander">Alexander</option>
				<option value="Anima">Anima</option>
				<option value="Asura">Asura</option>
				<option value="Atomos">Atomos</option>
				<option value="Bahamut">Bahamut</option>
				<option value="Balmung">Balmung</option>
				<option value="Behemoth">Behemoth</option>
				<option value="Belias">Belias</option>
				<option value="Brynhildr">Brynhildr</option>
				<option value="Cactuar">Cactuar</option>
				<option value="Carbuncle">Carbuncle</option>
				<option value="Cerberus">Cerberus</option>
				<option value="Chocobo">Chocobo</option>
				<option value="Coeurl">Coeurl</option>
				<option value="Diabolos">Diabolos</option>
				<option value="Durandal">Durandal</option>
				<option value="Excalibur">Excalibur</option>
				<option value="Exodus">Exodus</option>
				<option value="Faerie">Faerie</option>
				<option value="Famfrit">Famfrit</option>
				<option value="Fenrir">Fenrir</option>
				<option value="Garuda">Garuda</option>
				<option value="Gilgamesh">Gilgamesh</option>
				<option value="Goblin">Goblin</option>
				<option value="Gungnir">Gungnir</option>
				<option value="Hades">Hades</option>
				<option value="Hyperion">Hyperion</option>
				<option value="Ifrit">Ifrit</option>
				<option value="Ixion">Ixion</option>
				<option value="Kujata">Kujata</option>
				<option value="Lamia" selected>Lamia</option>
				<option value="Leviathan">Leviathan</option>
				<option value="Lich">Lich</option>
				<option value="Maetus">Maetus</option>
				<option value="Malboro">Malboro</option>
				<option value="Mandragora">Mandragora</option>
				<option value="Masamune">Masamune</option>
				<option value="Midgardsormr">Midgardsormr</option>
				<option value="Moogle">Moogle</option>
				<option value="Odin">Odin</option>
				<option value="Pandemonium">Pandemonium</option>
				<option value="Phoenix">Phoenix</option>
				<option value="Ragnarok">Ragnarok</option>
				<option value="Ramuh">Ramuh</option>
				<option value="Ridill">Ridill</option>
				<option value="Sargatanas">Sargatanas</option>
				<option value="Shiva">Shiva</option>
				<option value="Siren">Siren</option>
				<option value="Tiamat">Tiamat</option>
				<option value="Titan">Titan</option>
				<option value="Tonberry">Tonberry</option>
				<option value="Typhon">Typhon</option>
				<option value="Ultima">Ultima</option>
				<option value="Ultros">Ultros</option>
				<option value="Unicorn">Unicorn</option>
				<option value="Valefor">Valefor</option>
				<option value="Yojimbo">Yojimbo</option>
				<option value="Zalera">Zalera</option>
				<option value="Zeromus">Zeromus</option>
			</select>
			<br/>
			<button type="submit" class="btn btn-default search-button">Submit</button>
		</form>
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
</html
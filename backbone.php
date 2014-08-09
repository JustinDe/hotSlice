<?php
include "lodestone-api/api.php";
$API = new LodestoneAPI();

$Character = $API->get(array(
  "name" => "Isial Fenner", 
  "server" => "Lamia"
));

//group 1: Battle
//group 2: Character
//group 3:
//group 4: Items
//group 5: Synth
//group 6: Gathering
//group 7: 
//group 8: Quests
//group 9:
//group 10:
//group 11: Exploration
//group 12: Grand company

$API->parseAchievementsByCategory(1,$Character->getID());
$achi_parse = $API->getAchievements()[1];

function calc_ilvl($Character)
{
	$iLevelAvg = 0;
	$iLevelArr = [];

	$main = $Character->getSlot('main');
	$shield = $Character->getSlot('shield');
	$head = $Character->getSlot('head');
	$body = $Character->getSlot('body');
	$waist = $Character->getSlot('waist');
	$legs = $Character->getSlot('legs');
	$feet = $Character->getSlot('feet');
	$necklace = $Character->getSlot('necklace');
	$earrings = $Character->getSlot('earrings');
	$bracelets = $Character->getSlot('bracelets');
	$ring = $Character->getSlot('ring');
	$ring2 = $Character->getSlot('ring2');

	if($main['ilevel']){array_push($iLevelArr, $main['ilevel']);}
	if($shield['ilevel']){array_push($iLevelArr, $shield['ilevel']);}
	if($head['ilevel']){array_push($iLevelArr, $head['ilevel']);}
	if($body['ilevel']){array_push($iLevelArr, $body['ilevel']);}
	if($waist['ilevel']){array_push($iLevelArr, $waist['ilevel']);}
	if($legs['ilevel']){array_push($iLevelArr, $legs['ilevel']);}
	if($feet['ilevel']){array_push($iLevelArr, $feet['ilevel']);}
	if($necklace['ilevel']){array_push($iLevelArr, $necklace['ilevel']);}
	if($earrings['ilevel']){array_push($iLevelArr, $earrings['ilevel']);}
	if($bracelets['ilevel']){array_push($iLevelArr, $bracelets['ilevel']);}
	if($ring['ilevel']){array_push($iLevelArr, $ring['ilevel']);}
	if($ring2['ilevel']){array_push($iLevelArr, $ring2['ilevel']);}

	foreach($iLevelArr as $key=>$value)
	{
		$iLevelAvg += $value;
	}
	$iLevelAvg = ($iLevelAvg/count($iLevelArr));

	return($iLevelAvg);
}

function build_jobs($Character)
{
	$jobs = $Character->getClassJobsOrdered('level');
	$jobsArr = [];
	for($i=0;$i<=count($jobs);$i++)
	{
		if($jobs[$i]['level'] != "-" && $jobs[$i]['level'] != "")
		{
			//array_push($jobsArr, $jobs[$i]['level']);
			array_push($jobsArr, [
				$jobs[$i]['class'],
				$jobs[$i]['level'],
				$jobs[$i]['exp-current'],
				$jobs[$i]['exp-max']
			]);
		}
	}
	return($jobsArr);
}

function find_dis($activeJob)
{
	$dis = "";
	$dow_arr = ['Gladiator', 'Pugilist', 'Marauder', 'Lancer', 'Archer', 'Warrior', 'Paladin', 'Monk', 'Dragoon', 'Bard', 'Ninja'];
	$dom_arr = ['Conjurer', 'Thaumaturge', 'Arcanist', 'White Mage', 'Black Mage', 'Summoner', 'Scholar'];
	while($i <= count($dow_arr))
	{
		if($dow_arr[$i] == $activeJob)
		{
			$dis = "dow"; 
			$i = 100;
		}
		else
		{
			$dis = "idk";
		}
		$i++;
	}
	while($i<=count($dom_arr))
	{
		if($dom_arr[$i] == $activeJob)
		{
			$dis = "dom"; 
			$i = 100;
		}
		else
		{
			$dis = "idk";
		}
		$i++;
	}
	return($dis);
}

function trials_won($achi_parse)
{
	$trialWins = array_fill(0, 6, 0);
	for($i=0;$i<=count($achi_parse->get());$i++)
	{
		
		if($achi_parse->get()[$i]['id'] == 855 && $achi_parse->get()[$i]['obtained'] == 1)//Ifrit Ex
		{
			$trialWins[0] = 1; //Ifrit Ex
		}
		if($achi_parse->get()[$i]['id'] == 856 && $achi_parse->get()[$i]['obtained'] == 1)//Garuda EX
		{
			$trialWins[1] = 1; //Garuda Ex
		}
		if($achi_parse->get()[$i]['id'] == 857 && $achi_parse->get()[$i]['obtained'] == 1)//Titan EX
		{
			$trialWins[2] = 1; //Titan Ex
		}
		if($achi_parse->get()[$i]['id'] == 893 && $achi_parse->get()[$i]['obtained'] == 1)//Leviathan EX
		{
			$trialWins[3] = 1; //Leviahan Ex
		}
		if($achi_parse->get()[$i]['id'] == 894 && $achi_parse->get()[$i]['obtained'] == 1)//Moggle EX
		{
			$trialWins[4] = 1; //Moogle Ex
		}
		if($achi_parse->get()[$i]['id'] == 994 && $achi_parse->get()[$i]['obtained'] == 1)//Ramuh EX
		{
			$trialWins[5] = 1; //Ramuh Ex
		}
	}
	return($trialWins);
}

function raids_won($achi_parse)
{
	$raidWins = array_fill(0, 4, 0);
	for($i=0;$i<=count($achi_parse->get());$i++)
	{
		if($achi_parse->get()[$i]['id'] == 747 && $achi_parse->get()[$i]['obtained'] == 1)//Ifrit Ex
		{
			$raidWins[0] = 1; //Coil 1-5
		}
		if($achi_parse->get()[$i]['id'] == 887 && $achi_parse->get()[$i]['obtained'] == 1)//Leviathan EX
		{
			$raidWins[1] = 1; //Coil 6-9
		}
		if($achi_parse->get()[$i]['id'] == 883 && $achi_parse->get()[$i]['obtained'] == 1)//Moggle EX
		{
			$raidWins[2] = 1; //Labrynth of the Ancients
		}
		if($achi_parse->get()[$i]['id'] == 995 && $achi_parse->get()[$i]['obtained'] == 1)//Ramuh EX
		{
			$raidWins[3] = 1; //Sycus Tower
		}
	}
	return($raidWins);
}

function star_sum($trials, $raids)
{
	$starSum = 0;
	foreach($trials as $key=>$value)
	{
		$starSum += $value;
	}
	foreach($raids as $key=>$value)
	{
		$starSum += $value;
	}
	return($starSum/2);
}


//--------BasicInfo------
$name = $Character->getName();
$activeJob = $Character->getActiveJob()['name'];
$dis = find_dis($activeJob);
$activeLevel = $Character->getActiveLevel();
$server = $Character->getServer();
$avatar = $Character->getAvatar(96);
$portrait = $Character->getPortrait();
$freeCompany = ucwords(strtolower($Character->getFreeCompany()['name']));
$iLevel = calc_ilvl($Character);
$jobs = build_jobs($Character);

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

//--------Achievements----------
$trials = trials_won($achi_parse);
$raids = raids_won($achi_parse);

//--------Stars-----------
$stars = star_sum($trials, $raids);

/*
echo($name)."<br />";
echo($activeJob)."<br />";
echo($activeLevel)."<br />";
echo($server)."<br />";
echo($portrait)."<br />";
echo($freeCompany)."<br />";
echo($iLevel)."<br />";
foreach($jobs as $key=>$value)
{
	echo($value[0]." ".$value[1]." - ".$value[2]."/".$value[3]."<br />");
}
*/

?>
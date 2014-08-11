<?php
include "lodestone-api/api.php";
session_start();

if(!$_SESSION['userName'])
{
	header('Location: index.php') ;
}

$API = new LodestoneAPI();

$Character = $API->get(array(
  "name" => $_SESSION['userName'], 
  "server" => $_SESSION['server']
));

if(!$Character)
{
	header('Location: notfound.php') ;
}

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

	switch ($activeJob) 
	{
	    case "Gladiator":
	       	$dis = "tank";
	        break;
	    case "Marauder":
	        $dis = "tank";
	        break;
	    case "Warrior":
	        $dis = "tank";
	        break;
	    case "Paladin":
	        $dis = "tank";
	        break;
        case "Pugilist":
	       	$dis = "flank";
	        break;
	    case "Lancer":
	       	$dis = "flank";
	        break;
	    case "Archer":
	       	$dis = "flank";
	        break;
	    case "Monk":
	       	$dis = "flank";
	        break;
	    case "Dragoon":
	       	$dis = "flank";
	        break;
	    case "Bard":
	       	$dis = "flank";
	        break;
	    case "Summoner":
	       	$dis = "flank";
	        break;
	    case "Conjurer":
	       	$dis = "mage";
	        break;
	    case "Thaumaturge":
	       	$dis = "mage";
	        break;
	    case "Arcanist":
	       	$dis = "mage";
	        break;
	    case "White Mage":
	       	$dis = "mage";
	        break;
	    case "Black Mage":
	       	$dis = "mage";
	        break;
	    case "Scholar":
	       	$dis = "mage";
	        break;
	    default:
	    	$dis = "other";
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

//--------BasicInfo------
$name = $Character->getName();
//$activeJob = $Character->getActiveJob()['name'];
if($Character->getActiveJob()['name'])
{
	$activeJob = ucwords($Character->getActiveJob()['name']);
}
else
{
	$activeJob = ucwords($Character->getActiveClass());
}
$dis = find_dis($activeJob);
$activeLevel = $Character->getActiveLevel();
$server = $Character->getServer();
$avatar = $Character->getAvatar(96);
$portrait = $Character->getPortrait();
$freeCompany = ucwords(strtolower($Character->getFreeCompany()['name']));
$iLevel = round(calc_ilvl($Character), 0, PHP_ROUND_HALF_DOWN);
$jobs = build_jobs($Character);
?>
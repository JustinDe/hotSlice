<?php
include "../lodestone-api/api.php";
$API = new LodestoneAPI();

$Character = $API->get(array(
  "name" => "Isial Fenner", 
  "server" => "Lamia"
));

$API->parseAchievementsByCategory(1,$Character->getID());
$achi_parse = $API->getAchievements()[1];
$raidWins = [];
for($i=0;$i<=count($achi_parse->get());$i++)
{
	if($achi_parse->get()[$i]['id'] == 747 && $achi_parse->get()[$i]['obtained'] == 1)//Ifrit Ex
	{
		$raidWins[0] = 1;
	}
	if($achi_parse->get()[$i]['id'] == 887 && $achi_parse->get()[$i]['obtained'] == 1)//Leviathan EX
	{
		$raidWins[1] = 1;
	}
	if($achi_parse->get()[$i]['id'] == 883 && $achi_parse->get()[$i]['obtained'] == 1)//Moggle EX
	{
		$raidWins[2] = 1;
	}
	if($achi_parse->get()[$i]['id'] == 995 && $achi_parse->get()[$i]['obtained'] == 1)//Ramuh EX
	{
		$raidWins[3] = 1;
	}
}

foreach($raidWins as $key=>$value)
{
	echo($value."<br />");
}




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


?>
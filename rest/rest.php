<?php
include "backbone.php";

$charArr = array(
	"name" => $name,
	"activeJob" => $activeJob,
	"activeLevel" => $activeLevel,
	"server" => $server,
	"portrait" => $portrait,
	"freeCompany" => $freeCompany,
	"iLevel" => $iLevel,
	"hp" => $hp,
	"mp" => $mp,
	"tp" => $tp,
	"strength" => $strength,
	"vitality" => $vitality,
	"dexterity" => $dexterity,
	"intelligence" => $intelligence,
	"mind" => $mind,
	"piety" => $piety,
	"fire" => $fire,
	"ice" => $ice,
	"wind" => $wind,
	"earth" => $earth,
	"lightning" => $lightning,
	"water" => $water,
	"accuracy" => $accuracy,
	"criticalHitRate" => $criticalHitRate,
	"determination" => $determination,
	"defense" => $defense,
	"parry" => $parry,
	"magicDefense" => $magicDefense,
	"attackPower" => $attackPower,
	"skillSpeed" => $skillSpeed,
	"slashing" => $slashing,
	"piercing" => $piercing,
	"blunt" => $blunt,
	"craftsmanship" => $craftsmanship,
	"control" => $control,
	"attackMagicPotency" => $attackMagicPotency,
	"healingMagicPotency" => $healingMagicPotency,
	"spellSpeed" => $spellSpeed,
	"morale" => $morale,
	"gathering" => $gathering,
	"perception" => $perception,
	);

echo( json_encode($charArr));
?>


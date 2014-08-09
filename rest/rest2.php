<?php
include "lodestone-api/api.php";
$API = new LodestoneAPI();

$Character = $API->get(array(
  "name" => "Isial Fenner", 
  "server" => "Lamia"
));

echo(json_encode($Character));
?>
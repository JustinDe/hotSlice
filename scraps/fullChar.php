<?php
include "../lodestone-api/api.php";
$API = new LodestoneAPI();

$Character = $API->get(array(
  "name" => "Isial Fenner", 
  "server" => "Lamia"
));

echo(print_r($Character));
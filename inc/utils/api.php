<?php
require "inc/config.php";

function matchRegion($region){
  $regionAmericas = array('br1', 'la1', 'la2', 'na1', 'oc1', 'tr1');
  $regionEurope = array('eun1', 'euw1', 'ru', 'tr');
  $regionAsia = array('jp1', 'kr', 'oc1');
  $regionSea = array('sg2', 'ph2', 'th2', 'vn2', 'tw2');

  if (stripos(json_encode($regionAmericas), $region) !== false) {
    return "americas";
  } else if (stripos(json_encode($regionEurope), $region) !== false) {
    return "europe";
  } else if (stripos(json_encode($regionAsia), $region) !== false) {
    return "asia";
  } else if (stripos(json_encode($regionSea), $region) !== false) {
    return "sea";
  } else {
    return "not found";
  }
}

function matchlistsByID($region, $matchId, $apiKey){
  $regionMatch = matchRegion($region);

  $matchRoute = "https://$regionMatch.api.riotgames.com/lol/match/v5/matches/$matchId?api_key=$apiKey";

  $matchApi = file_get_contents($matchRoute);
  $matchRow = json_decode($matchApi, true);

  yield $matchRow;
}

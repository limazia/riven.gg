<?php
require "inc/utils/api.php";

// Variables
$region = trim($_GET['region']);
$region = strip_tags($region);
$region = htmlspecialchars($region);

$summonerName = trim($_GET['summoner']);
$summonerName = strip_tags($summonerName);
$summonerName = htmlspecialchars($summonerName);

$replaceName = str_replace(' ', '%20', $summonerName);
$apiKey = $config->apiKey;

// Summoner API
$summonerRoute = "https://$region.api.riotgames.com/lol/summoner/v4/summoners/by-name/$replaceName?api_key=$apiKey";

$summonerApi = file_get_contents($summonerRoute);
$summonerRow = json_decode($summonerApi, true);

$summoner = array(
  "id" => $summonerRow['id'],
  "accountId" => $summonerRow['accountId'],
  "puuid" => $summonerRow['puuid'],
  "name" => $summonerRow['name'],
  "profileIconId" => $summonerRow['profileIconId'],
  "revisionDate" => $summonerRow['revisionDate'],
  "summonerLevel" => $summonerRow['summonerLevel'],
);

// Rank API
$summonerId = $summoner['id'];

$rankRoute = "https://$region.api.riotgames.com/lol/league/v4/entries/by-summoner/$summonerId?api_key=$apiKey";

$rankApi = file_get_contents($rankRoute);
$rankRow = json_decode($rankApi, true);

$rank = array(
  "leagueId" => $rankRow[0]['leagueId'],
  "queueType" => $rankRow[0]['queueType'],
  "tier" => $rankRow[0]['tier'],
  "rank" => $rankRow[0]['rank'],
  "summonerId" => $rankRow[0]['summonerId'],
  "summonerName" => $rankRow[0]['summonerName'],
  "leaguePoints" => $rankRow[0]['leaguePoints'],
  "wins" => $rankRow[0]['wins'],
  "losses" => $rankRow[0]['losses'],
  "veteran" => $rankRow[0]['veteran'],
  "inactive" => $rankRow[0]['inactive'],
  "freshBlood" => $rankRow[0]['freshBlood'],
  "hotStreak" => $rankRow[0]['hotStreak']
);

// Matchlists API
$summonerPUUID = $summoner['puuid'];
$accountRegion = matchRegion($region);

$matchRoute = "https://$accountRegion.api.riotgames.com/lol/match/v5/matches/by-puuid/$summonerPUUID/ids?start=0&count=2&api_key=$apiKey";

$matchApi = file_get_contents($matchRoute);
$matchRow = json_decode($matchApi, true);
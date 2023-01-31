<?php

function summonerRegion($region){
	switch ($region) {
		case "na1":
			echo "América do Norte";
			break;
		case "euw1":
			echo "UE Ocidental";
			break;
		case "eune1":
			echo "UE Nórdica e Leste";
			break;
		case "la1":
			echo "América Latina Norte";
		case "la2":
			echo "América Latina Sul";
			break;
		case "br1":
			echo "Brasil";
			break;
		case "tr1":
			echo "Turquia";
			break;
		case "ru":
			echo "Rússia";
			break;
		case "oc1":
			echo "Oceania";
			break;
		case "jp1":
			echo "Japão";
			break;
		case "kr":
			echo "Korea";
			break;
		default:
			echo "erro...";
	}
}

function summonerRank($tier, $rank) {
  if ($tier == "BRONZE" && $rank == "I") {
    echo "bronze_i";
  } elseif ($tier == "BRONZE" && $rank == "II") {
    echo "bronze_ii";
  } elseif ($tier == "BRONZE" && $rank == "III") {
    echo "bronze_iii";
  } elseif ($tier == "BRONZE" && $rank == "IV") {
    echo "bronze_iv";
  } elseif ($tier == "BRONZE" && $rank == "V") {
    echo "bronze_v";
  } elseif ($tier == "SILVER" && $rank == "I") {
    echo "silver_i";
  } elseif ($tier == "SILVER" && $rank == "II") {
    echo "silver_ii";
  } elseif ($tier == "SILVER" && $rank == "III") {
    echo "silver_iii";
  } elseif ($tier == "SILVER" && $rank == "IV") {
    echo "silver_iv";
  } elseif ($tier == "SILVER" && $rank == "V") {
    echo "silver_v";
  } elseif ($tier == "GOLD" && $rank == "I") {
    echo "gold_i";
  } elseif ($tier == "GOLD" && $rank == "II") {
    echo "gold_ii";
  } elseif ($tier == "GOLD" && $rank == "III") {
    echo "gold_iii";
  } elseif ($tier == "GOLD" && $rank == "IV") {
    echo "gold_iv";
  } elseif ($tier == "GOLD" && $rank == "V") {
    echo "gold_v";
  } elseif ($tier == "PLATINUM" && $rank == "I") {
    echo "platinum_i";
  } elseif ($tier == "PLATINUM" && $rank == "II") {
    echo "platinum_ii";
  } elseif ($tier == "PLATINUM" && $rank == "III") {
    echo "platinum_iii";
  } elseif ($tier == "PLATINUM" && $rank == "IV") {
    echo "platinum_iv";
  } elseif ($tier == "PLATINUM" && $rank == "V") {
    echo "platinum_v";
  } elseif ($tier == "DIAMOND" && $rank == "I") {
    echo "diamond_i";
  } elseif ($tier == "DIAMOND" && $rank == "II") {
    echo "diamond_ii";
  } elseif ($tier == "DIAMOND" && $rank == "III") {
    echo "diamond_iii";
  } elseif ($tier == "DIAMOND" && $rank == "IV") {
    echo "diamond_iv";
  } elseif ($tier == "DIAMOND" && $rank == "V") {
    echo "diamond_v";
  } elseif ($tier == "MASTER" && $rank == "I") {
    echo "master_i";
  } elseif ($tier == "CHALLENGER" && $rank == "I") {
    echo "challenger_i";
  }
}

<?php
require "inc/config.php";

require "inc/api/summoner.php";

require "inc/utils/player.php";
require "inc/utils/time.php";

if ($summonerRow == null) {
  header("Location: notfound.php");
  exit;
}

$apiKey = $config->apiKey;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $config->title; ?> - <?php echo $summoner['name']; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css?v=64764">
</head>

<body>
  <?php require "inc/html/header.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-6">
        <div class="card">
          <div class="card-header">
            Perfil de <strong><?php echo $summoner['name']; ?></strong>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/profileicon/<?php echo $summoner['profileIconId']; ?>.png" class="img-thumbnail rounded" />
              </div>
              <div class="col-sm-6 col-md-8">
                <h4>
                  <?php echo $summoner['name']; ?>
                  <?php echo summonerRegion($region); ?>
                  <?php echo $summoner['summonerLevel']; ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if ($rankRow == null) { ?>
        <div class="col-xs-4 col-sm-4 col-md-6">
          <div class="card">
            <div class="card-header">Ranqueada</div>
            <div class="card-body">
              <img src="assets/images/ranks/provisional.png" class="img-fluid rank">
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="col-xs-4 col-sm-4 col-md-6">
          <div class="card">
            <div class="card-header">Ranqueada</div>
            <div class="card-body">
              <img src="assets/images/ranks/<?php echo summonerRank($rank["tier"], $rank["rank"]); ?>.png" class="img-fluid rank">
              <?php echo $rank['tier']; ?> <?php echo $rank['rank']; ?>
              <small>(<?php echo $rank['leaguePoints']; ?> PDL)</small>
              <br>
              <small>
                <span style="color:green;"><?php echo $rank['wins']; ?></span> V
                <span>/</span>
                <span style="color:red;"><?php echo $rank['losses']; ?></span> D
              </small>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row mt-5">
      <div class="col-xs-12 col-sm-7 col-md-12">
        <div class="card">
          <div class="card-header">Partidas recentes</div>
          <div class="card-body">

            <?php foreach ($matchRow as $row) { ?>
              <?php foreach (matchlistsByID($region, $row, $apiKey) as $index => $match) { ?>
                <div class="row pb-4">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex justify-content-between align-items-center">
                        Partida <?php echo $match["metadata"]["matchId"]; ?> (<?php echo $match["info"]["gameMode"]; ?>)
                        <small class="text-muted">
                          <?php echo timeStamp($match["info"]["gameEndTimestamp"]); ?>
                        </small>
                      </div>

                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-center align-items-center">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][0]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][0]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][1]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][1]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][2]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][2]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][3]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][3]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][4]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][4]["summonerName"]; ?>">
                        <span class="mx-3">vs</span>
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][5]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][5]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][6]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][6]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][7]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][7]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][8]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][8]["summonerName"]; ?>">
                        <img src="http://ddragon.leagueoflegends.com/cdn/13.1.1/img/champion/<?php echo $match["info"]["participants"][9]["championName"]; ?>.png" class="img-thumbnail rank" data-toggle="tooltip" data-placement="top" title="<?php echo $match["info"]["participants"][9]["summonerName"]; ?>">
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/app.js?v=21321"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
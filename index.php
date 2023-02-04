<?php
require "inc/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config->title; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css?v=6545">
</head>
<body>
    <?php require "inc/html/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form class="form-inline" method="GET" action="summoner" autocomplete="OFF">
                            <div class="btn-toolbar justify-content-between">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select name="region" class="form-control">
                                            <option value="na1" disabled>North America</option>
                                            <option value="euw1" disabled>Europe West</option>
                                            <option value="eun1" disabled>Europe Nordic & East</option>
                                            <option value="oce" disabled>Oceania</option>
                                            <option value="kr" disabled>Korea</option>
                                            <option value="jp1" disabled>Japan</option>
                                            <option value="br1" selected>Brazil</option>
                                            <option value="la2" disabled>LAS</option>
                                            <option value="la1" disabled>LAN</option>
                                            <option value="ru1" disabled>Russia</option>
                                            <option value="tr1" disabled>Türkiye</option>
                                            <option value="sg2" disabled>Singapore</option>
                                            <option value="ph2" disabled>Philippines</option>
                                            <option value="tw2" disabled>Taiwan</option>
                                            <option value="vn2" disabled>Vietnam</option>
                                            <option value="th2" disabled>Thailand</option>
                                        </select>
                                    </div>
                                    <input type="text" name="summoner" class="form-control" required placeholder="Nome do invocador...">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Procurar</button>
                        </form>
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
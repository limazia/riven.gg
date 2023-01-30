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
                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select name="region" class="form-control">
                                            <option value="br1">BR</option>
                                            <option disabled value="euw1">EUW</option>
                                            <option disabled value="eune1">EUNE</option>
                                            <option disabled value="jp1">JP</option>
                                            <option disabled value="kr">KR</option>
                                            <option disabled value="la1">LAN</option>
                                            <option disabled value="la2">LAS</option>
                                            <option disabled value="na1">NA</option>
                                            <option disabled value="oc1">OCE</option>
                                            <option disabled value="ru">RU</option>
                                            <option disabled alue="tr1">TK</option>
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
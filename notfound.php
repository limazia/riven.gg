<?php
require "inc/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $config->title; ?> - Jogador não encontrado</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css?v=6545">
</head>

<body>
  <?php require "inc/html/header.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <h1 class="error-code">Ops...</h1>
        <p class="error-desc mt-5 pb-3">Jogador não encontrado</p>
        <a class="btn btn-link" href="<?php echo $config->url; ?>">
          Voltar
        </a>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/app.js?v=21321"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
include '../end/m-config.php';
$id  = evaluar($_GET['id']);
$cdb  = $conexion->query("SELECT * FROM hentai WHERE id=$id");
$row = $cdb->fetch_assoc();
?><!DOCTYPE html>
<html lang="es">
  <head>
    <title><? echo $row['title'];?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Por que todos amamos la animacion erotica japonesa!">
    <meta name="keywords" content="hentai, adultos, caricaturas, porno, sexo, acto, japones,asia, asiticas, nipon, ecchi, desnudo, desnuda, coger, cojer, xxx">
    <meta name="author" content="Lynild">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery-lazyload/jquery.lazyload.js"></script>
  </head>
  <body class="page-overview">
    <article class="container">
      <div class="header-logo"></div>
      <div class="publ"></div>
      <div class="body">
        <div id="video-content"><? echo $row['cont'];?></div>
        <p class="clear-a">Aclaramos que los videos contenidos vienes de varias paginas web, para que los puedas disfrutar, pero no si el reconocimiento de otras paginas.</p>
        <div id="sinopsis">
          <p><? echo $row['sin'];?></p>
        </div>
      </div>
    </article>
    <footer></footer>
  </body>
  <script type="text/javascript" src="../js/main.js"></script>
</html>
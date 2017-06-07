
<?php
include '../end/m-config.php';
$id  = evaluar($_GET['id']);
$cdb  = $conexion->query("SELECT * FROM hentai WHERE id=$id");
$row = $cdb->fetch_assoc();
$tit = $row['title'];
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
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <article class="container">
      <div class="header-logo"></div>
      <div class="publ"></div>
      <div class="body">
        <div id="video-content"><? echo $row['chapter'];?></div>
        <p class="clear-a"><span>Aclaramos</span> que la mayoria del contenido es recolectado e indexado desde otras web, pero les haremos mencion de estas... <a href='web.php'>aqui</a></p>
        <div id="sinopsis">
          <p>Lel</p>
        </div>
        <div id="interest">
          <div>
            <p>Tal vez te pueda interesar...</p>
            <div class="row">
              <figure class="columns three"><img src="#" title="title" alt="alt" attr>
                <figcaption> </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </article>
    <footer></footer>
  </body>
  <script type="text/javascript" src="../js/main.js"></script>
</html>
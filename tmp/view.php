
<?php
include '../end/m-config.php';
$id  = evaluar($_GET['id']);
$cdb  = $conexion->query("SELECT * FROM hentai WHERE id=$id");
while($row = $cdb->fetch_assoc()){
?><!DOCTYPE html>
<html lang="es">
  <head>
    <title><? echo $row['title'];?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Heaven Night, division erotica de Limbo City PRO, por que a todos nos gusta el hentai, pero casi nadie lo dice...">
    <meta name="keywords" content="hentai, adultos, caricaturas, porno, sexo, acto, japones,asia, asiticas, nipon, ecchi, desnudo, desnuda, coger, cojer, xxx, heaven, night, PRO, pro, limbo, city, lynild, angel">
    <meta name="author" content="Lynild">
    <meta name="robots" content="no-index, no-follow">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery-lazyload/jquery.lazyload.js"></script>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      
    </script>
  </head>
  <body class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <article class="container">
      <div class="header-logo"></div>
      <div class="publ">
        <script async src="//adserver.juicyads.com/js/jads.js"></script><ins id="591985" data-width="728" data-height="102"></ins>
        <script>(adsbyjuicy = window.adsbyjuicy||[]).push({'adzone':591985});</script>
      </div>
      <div class="fb-likek row">
        <div data-href="https://www.facebook.com/heavensnight6/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" class="fb-page columns six">
          <blockquote cite="https://www.facebook.com/heavensnight6/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/heavensnight6/">Heaven&#039;s Night</a></blockquote>
        </div>
        <div data-href="https://www.facebook.com/limbocity/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" class="fb-page columns six">
          <blockquote cite="https://www.facebook.com/limbocity/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/limbocity/">Limbo City</a></blockquote>
        </div>
      </div>
      <div class="body">
        <h2 class="title"><? echo $row['title'];?> &mdash; All Chapters</h2>
        <h4 class="ttl"><? echo $row['type'];?></h4>
        <nav>
          <ul>
            <li>Inicio<a href="/#!/inx"></a></li>
            <li>Hentai<a href="all-hentai.php"></a></li>
            <li>Doujinshi<a href="all-doujinshi.php"></a></li>
            <li>Other Contributions<a href="all-other.php"></a></li>
          </ul>
        </nav>
        <p class="clear-a"><span>Aclaramos</span> que la mayoria del contenido es recolectado e indexado desde otras web, pero les haremos mencion de estas... <a href='web.php'>aqui</a></p>
        <div id="sinopsis">
          <p><span>Sinopsis:</span>&nbsp;<? echo $row['sinopsis'];?></p>
        </div>
        <div class="video-content"><? echo $row['chapter1'];?></div>
        <div class="video-content"><? echo $row['chapter2'];?></div>
        <div class="video-content"><? echo $row['chapter3'];?></div>
        <div class="video-content"><? echo $row['chapter4'];?></div>
        <div class="video-content"><? echo $row['chapter5'];?></div>
        <div class="video-content"><? echo $row['chapter6'];?></div>
        <div class="video-content"><? echo $row['chapter7'];?></div>
        <div class="video-content"><? echo $row['chapter8'];?></div>
        <div class="video-content"><? echo $row['chapter9'];?></div>
        <div class="video-content"><? echo $row['chapter10'];?></div>
        <div id="interest">
          <div>
            <p class="title">Tal vez te pueda interesar...</p>
            <div class="row"><?php $q="SELECT * FROM hentai LIMIT 0,4"; $res = $conexion->query($q); while ($row = $res->fetch_assoc()){ ?>
              <figure class="columns three hen rr"><img src="<? echo $row["img"];?>" alt="<? echo $row["title"];?>" class="rrst">
                <figcaption><? echo $row["title"];?></figcaption><a href="http://short.am/s/49390?s=<? echo $row["lnk"];?>"></a>
              </figure><?php } ?>
            </div>
          </div>
        </div>
        <div class="fb-book">
          <div data-href="http://heaven-night.com/" data-width="100%" data-numposts="5" class="fb-comments"></div>
        </div>
      </div>
    </article>
    <footer>
      <article class="container">
        <div class="row">
          <div class="columns three pa">
            <h4>More</h4>
            <ul>
              <li><a href="http://limbocity.xyz">Limbo City</a></li>
              <li><a href="/#!/">Inicio</a></li>
              <li><a href="/tmp/all-doujinshi.php">Doujinshi</a></li>
              <li><a href="/tmp/all-other.php">Aportes</a></li>
            </ul>
          </div>
          <div class="columns three pa">
            <h4>Redes</h4>
            <ul>
              <li><a href="https://www.facebook.com/heavensnight6">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>
          <div id="mc_embed_signup" class="columns six pa">
            <h4>Newsletter</h4>
            <p><strong>Suscribete para recibir actualizaciones</strong> Recibe las noticias y mensajes lo mas pronto posible.</p>
            <form id="mc-embedded-subscribe-form" action="//xyz.us12.list-manage.com/subscribe/post?u=1f3f3272787af7763f0467cdd&amp;amp;id=e2ca5ccacd" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate class="row validate">
              <div class="columns eight">
                <input id="mce-EMAIL" type="email" value="" name="EMAIL" placeholder="Correo Electronico" required class="u-full-width email">
              </div>
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_1f3f3272787af7763f0467cdd_e2ca5ccacd" tabindex="-1" value="">
              </div>
              <div class="columns four">
                <input id="mc-embedded-subscribe" type="submit" name="subscribe" value="Suscribir" class="button-primary button">
              </div>
            </form>
          </div>
        </div>
        <p>"Heaven's Night" es una division de <a href='http://limbocity.xyz' target='_blank'>"Limbo City"</a>, el hecho de estar navegando por esta pagina implica que aceptas la politica de Cookies y el tipo de material por el que existe este sitio (segun nuestras <a href='http://privacy.limbocity.xyz' target='_blank'>politicas de uso y privacidad</a>). Ademas de declarar que eres mayor de edad segun las leyes de la localidad en que vivas.</p>
      </article>
    </footer>
  </body>
  <script type="text/javascript" src="../js/main.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-100788127-1', 'auto');
    ga('send', 'pageview');
    
  </script>
</html><?php } ?>
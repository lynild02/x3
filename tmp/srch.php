<?php include '../end/m-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="author" content="author">
    <meta name="robots" content="no-index, no-follow">
    <link rel="icon" href="src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="../css/style2.min.css">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery-lazyload/jquery.lazyload.js"></script>
    <script type="text/javascript" src="<?=$serv?>js/fb.js"></script>
    <script>
      window.onload = function(){
        $('.loader-c').fadeOut('slow');
      };
      $(document).ready(function(){
        $('.ball-scale-multiple').loaders();
        $("img.lazy").lazyload();
        var wHeight = $(window).innerHeight();
        ajustesIniciales();
        function ajustesIniciales(){
          $('.wpp').css({'height':wHeight/1.3+'px'});
        }
      });
      
    </script>
    <script type="text/javascript" async>
      var _prvar=_prvar||new Object();
      (function(pa,s){if(document.getElementById('pr444a070e'))return false;
      
      pa=document.createElement('script');pa.type='text/javascript';pa.async=true;pa.id='pr444a070e';pa.src='//prscripts.com/pub.js';
          s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(pa,s);})();
      
    </script>
  </head>
  <body class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <header class="wpp"></header>
    <article class="container">
      <div class="publ">
        <script async src="//adserver.juicyads.com/js/jads.js"></script><ins id="591985" data-width="728" data-height="102"></ins>
        <script>(adsbyjuicy = window.adsbyjuicy||[]).push({'adzone':591985});</script>
      </div>
      <h3>Resultados de tu busqueda</h3>
      <nav>
        <ul>
          <li>Inicio<a href="/#!/inx"></a></li>
          <li>Hentai<a href="all-hentai.php"></a></li>
          <li>Doujinshi<a href="all-doujinshi.php"></a></li>
          <li>Other Contributions<a href="all-other.php"></a></li>
        </ul>
      </nav>
      <div class="body">
        <div class="left">
          <?php if($_POST['buscar']){ ?>
          <?php $buscar = $_POST["palabra"];  
          $qry = "SELECT * FROM hentai WHERE title LIKE '%$buscar%'";
          $dot = $conexion->query($qry);
          while ($reg = $dot->fetch_assoc()) { ?> 
          <div class="cct"><img data-original="<? echo $reg['img'];?>" class="ssr lazy">
            <div class="txt"> 
              <h4><? echo $reg['title'];?></h4>
              <p><? echo $reg['sinopsis'];?></p>
            </div><a href="http://short.am/s/49390?s=http://heaven-night.com/tmp/<? echo $reg['lnk'];?>"></a>
          </div><?php } ?>
          <?php } ?>
        </div>
        <div class="right">
          <div data-href="https://www.facebook.com/heavensnight6/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" class="fb-page">
            <blockquote cite="https://www.facebook.com/heavensnight6/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/heavensnight6/">Heaven&#039;s Night</a></blockquote>
          </div>
        </div>
      </div>
    </article>
  </body>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-100788127-1', 'auto');
    ga('send', 'pageview');
  </script>
</html>
<?php include '../end/m-config.php';?>
<div class="importantcontent">
  <script>
    $('.page-overview').css({
      'background':'url(img/bghen.png)','background-size':'cover','background-repeat':'no-repeat','background-attachment': 'fixed'
    });
    $('.wrapp').removeClass('section');
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
  </script>
  <article class="container">
    <div class="logo-header">
      <div class="lgh"></div>
    </div>
    <div class="publ">
      <script async="async" src="//adserver.juicyads.com/js/jads.js"></script><ins id="591985" data-width="728" data-height="102"></ins>
      <script>(adsbyjuicy = window.adsbyjuicy||[]).push({'adzone':591985});</script>
    </div>
    <nav>
      <ul>
        <li>Inicio<a href="/#!/inx"></a></li>
        <li>Hentai<a href="tmp/all-hentai.php"></a></li>
        <li>Doujinshi<a href="tmp/all-doujinshi.php"></a></li>
        <li>Other Contributions<a href="tmp/all-other.php"></a></li>
      </ul>
    </nav>
    <div class="fb-likek row">
      <div data-href="https://www.facebook.com/heavensnight6/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" class="fb-page columns six">
        <blockquote cite="https://www.facebook.com/heavensnight6/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/heavensnight6/">Heaven&#039;s Night</a></blockquote>
      </div>
      <div data-href="https://www.facebook.com/limbocity/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" class="fb-page columns six">
        <blockquote cite="https://www.facebook.com/limbocity/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/limbocity/">Limbo City</a></blockquote>
      </div>
    </div>
    <form method="POST" action="tmp/srch.php">
      <h4>Busca el HENTAI que quieras!</h4>
      <div class="row">
        <input type="text" placeholder="Buscar Hentai" name="palabra" class="columns eight"/>
        <input type="submit" value="Buscar" name="buscar" class="columns four"/>
      </div>
    </form>
    <div class="body">
      <div id="hentai" class="sec">
        <p>Ultimos <span>Hentai</span> agregados.. <a href='tmp/all-hentai.php'>ver mas</a></p><?php $query = "SELECT * FROM hentai WHERE type = 'hentai' ORDER BY id DESC LIMIT 0,10";
        $res = $conexion->query($query);
        while ($row = $res->fetch_assoc()){ ?>
        <figure class="hen rr"><img src="<? echo $row["img"];?>" class="rrst"/>
          <figcaption><? echo $row["title"];?></figcaption><a href="http://short.am/s/49390?s=http://heaven-night.com/tmp/<? echo $row["lnk"];?>"></a>
        </figure><?php } ?>
      </div>
      <div id="doujinshi" class="sec">
        <p>Ultimos <span>Doujinshi</span> agregados.. <a href='tmp/all-doujinshi.php'>ver mas</a></p><?php $query = "SELECT * FROM hentai WHERE type = 'doujinshi' ORDER BY id DESC LIMIT 0,10";
        $res = $conexion->query($query);
        while ($row = $res->fetch_assoc()){ ?>
        <figure class="hen"><img src="<? echo $row["img"];?>"/>
          <figcaption><? echo $row["title"];?></figcaption><a href="http://short.am/s/49390?s=http://heaven-night.com/tmp/<? echo $row["lnk"];?>"></a>
        </figure><?php } ?>
      </div>
      <div id="other" class="sec">
        <p>Ultimos <span>Aportes</span> agregados.. <a href='tmp/all-other.php'>ver mas</a></p><?php $query = "SELECT * FROM hentai WHERE type = 'other' ORDER BY id DESC LIMIT 0,10";
        $res = $conexion->query($query);
        while ($row = $res->fetch_assoc()){ ?>
        <figure class="hen"><img src="<? echo $row["img"];?>"/>
          <figcaption><? echo $row["title"];?></figcaption><a href="http://short.am/s/49390?s=http://heaven-night.com/tmp/<? echo $row["lnk"];?>"></a>
        </figure><?php } ?>
      </div>
    </div>
    <div class="fb-book">
      <div data-href="http://heaven-night.com/" data-width="100%" data-numposts="5" class="fb-comments"></div>
    </div>
  </article>
</div>
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
        <form id="mc-embedded-subscribe-form" action="//xyz.us12.list-manage.com/subscribe/post?u=1f3f3272787af7763f0467cdd&amp;amp;id=e2ca5ccacd" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate" class="row validate">
          <div class="columns eight">
            <input id="mce-EMAIL" type="email" value="" name="EMAIL" placeholder="Correo Electronico" required="required" class="u-full-width email"/>
          </div>
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
            <input type="text" name="b_1f3f3272787af7763f0467cdd_e2ca5ccacd" tabindex="-1" value=""/>
          </div>
          <div class="columns four">
            <input id="mc-embedded-subscribe" type="submit" name="subscribe" value="Suscribir" class="button-primary button"/>
          </div>
        </form>
      </div>
    </div>
    <p>"Heaven's Night" es una division de <a href='http://limbocity.xyz' target='_blank'>"Limbo City"</a>, el hecho de estar navegando por esta pagina implica que aceptas la politica de Cookies y el tipo de material por el que existe este sitio (segun nuestras <a href='http://privacy.limbocity.xyz' target='_blank'>politicas de uso y privacidad</a>). Ademas de declarar que eres mayor de edad segun las leyes de la localidad en que vivas.</p>
  </article>
</footer>
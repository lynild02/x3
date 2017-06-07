<?php include '../end/m-config.php';?>
<div class="importantcontent">
  <script>
    $('.page-overview').css({
      'background':'url(img/bghen.png)','background-size':'cover','background-repeat':'no-repeat','background-attachment': 'fixed'
    });
    $('.wrapp').removeClass('section');
  </script>
  <article class="container">
    <div class="logo-header">
      <div class="lgh"></div>
    </div>
    <div class="publ"></div>
    <nav>
      <ul>
        <li>Inicio<a href="#"></a></li>
        <li>Hentai<a href="#"></a></li>
        <li>Doujinshi<a href="#"></a></li>
        <li>Other Contributions<a href="#"></a></li>
      </ul>
    </nav>
    <div class="body">
      <div id="hentai" class="sec">
        <p>Ultimos <span>Hentai</span> agregados.. <a href='all-hentai.php'>ver mas</a></p><?php $query = "SELECT * FROM hentai WHERE type = 'hentai' LIMIT 0,10";
        $res = $conexion->query($query);
        while ($row = $res->fetch_assoc()){ ?>
        <figure class="hen"><img src="<? echo $row["img"];?>"/>
          <figcaption><? echo $row["title"];?></figcaption><a href="tmp/<? echo $row["lnk"];?>"></a>
        </figure><?php } ?>
      </div>
      <div id="doujinshi" class="sec">
        <p>Ultimos <span>Doujinshi</span> agregados.. <a href='all-doujinshi.php'>ver mas</a></p><?php $query = "SELECT * FROM hentai WHERE type = 'doujinshi' LIMIT 0,10";
        $res = $conexion->query($query);
        while ($row = $res->fetch_assoc()){ ?>
        <figure class="hen"><img src="<? echo $row["img"];?>"/>
          <figcaption><? echo $row["title"];?></figcaption><a href="tmp/&lt;? echo $row[&quot;lnk&quot;];?&gt;"></a>
        </figure><?php } ?>
      </div>
      <div id="other" class="sec">
        <p>Ultimos <span>Aportes</span> agregados.. <a href='all-other.php'>ver mas</a></p><?php $query = "SELECT * FROM hentai WHERE type = 'other' LIMIT 0,10";
        $res = $conexion->query($query);
        while ($row = $res->fetch_assoc()){ ?>
        <figure class="hen"><img src="<? echo $row["img"];?>"/>
          <figcaption><? echo $row["title"];?></figcaption><a href="tmp/&lt;? echo $row[&quot;lnk&quot;];?&gt;"></a>
        </figure><?php } ?>
      </div>
    </div>
  </article>
</div>
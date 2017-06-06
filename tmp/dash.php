
<script>
  $('.wrapp').css({
    //'background':'#000'
  });
  
</script><?php include '../end/m-config.php';?>
<header></header>
<nav>
  <ul>
    <li>videos<a href="#" target="_blank"></a></li>
    <li>photos<a href="#" target="_blank"></a></li>
    <li>real<a href="#" target="_blank"></a></li>
    <li>about<a href="#" target="_blank"></a></li>
  </ul>
</nav>
<div class="content"><?php
   echo 'Hello!';
   $query="SELECT * FROM videos ORDER BY id DESC LIMIT 0, 48";
   $do = $conexion->query($query);
   if($query){echo 'Yes Query!';} else {echo 'No query!';}while($row=$do->fetch_assoc()){ ?>
  <div class="video-container">
    <div class="thumb"><img src="<? echo $row["img"];?>"/><a href="<? echo $row["lnk"];?>"></a></div>
    <p><? echo $row["title"];?></p>
  </div><?php } ?>
</div>
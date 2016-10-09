<?php  
include 'intranet/mysql.php';
$mysql = new MySQL();
$cnx = $mysql->Conectar();
$db = $mysql->SeleccionarDB($cnx);
$noticias = $mysql->Query('select * from noticias order by 1 DESC');
$mysql->Desconectar($cnx);
?>
<div class="container marketing">
    <br></br>
    <?php 
      for ($i=0; $i < count($noticias) ; $i++) { 
        if ($i%2==0) {
    ?>
    <div class="row featurette">
      <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $noticias[$i]['titulo'].'. '?><span class="text-muted"><?php echo $noticias[$i]['subtitulo'] ?></span></h2>
          <p class="lead">
          <blockquote>
          <?php echo $noticias[$i]['contenido'] ?>
          <br>
          <small><?php echo $noticias[$i]['fecha'] ?></small>
          </blockquote>
          </p>
      </div>
      <div class="col-md-5">
          <img class="featurette-image img-responsive img-rounded center-block visible-md" data-src="holder.js/250x250/auto" alt="250x250" src=<?php echo $noticias[$i]['imagen'] ?> data-holder-rendered="true">
          <img class="featurette-image img-responsive img-rounded center-block visible-lg" data-src="holder.js/500x500/auto" alt="500x500" src=<?php echo $noticias[$i]['imagen'] ?> data-holder-rendered="true">
      </div>
    </div>
    <?php
        } else {
    ?>
    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php echo $noticias[$i]['titulo'].'. '?><span class="text-muted"><?php echo $noticias[$i]['subtitulo'] ?></span></h2>
          <p class="lead">
          <blockquote>
          <?php echo $noticias[$i]['contenido'] ?>
          <small><?php echo $noticias[$i]['fecha'] ?></small>
          </blockquote>
          </p>
      </div>
      <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive img-rounded center-block visible-md" data-src="holder.js/250x250/auto" alt="250x250" src=<?php echo $noticias[$i]['imagen'] ?> data-holder-rendered="true">
          <img class="featurette-image img-responsive img-rounded center-block visible-lg" data-src="holder.js/500x500/auto" alt="500x500" src=<?php echo $noticias[$i]['imagen'] ?> data-holder-rendered="true">
      </div>
    </div>
    <?php

        }
    ?>
    <hr class="featurette-divider">
    <?php
      }
    ?>
</div>
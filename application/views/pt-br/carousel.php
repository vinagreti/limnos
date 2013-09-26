<h1 class="text-center"><?php echo $folder; ?></h1>

<br></br>

<div class="row-fluid">
  <div class="span24">

    <div class="carousel slide" id="myCarousel">

      <div class="carousel-inner">
        <?php foreach($images as $key => $image) {?>
        <div class="item <?php if($key == 0) echo 'active'; ?>">
          <p class="text-center">
            <a href="<?php echo asset_url('img/galeria/'.$folder.'/'.$image); ?>" target="_blank">
              <img src="<?php echo asset_url('img/galeria/'.$folder.'/'.$image); ?>" class="imagem_galeria" />
            </a>
          </p>
        </div>
        <?php } ?>
      </div>

      <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
      <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
    </div>

  </div>
</div>
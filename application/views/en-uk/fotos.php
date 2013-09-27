<div class="row-fluid">
	<div class="offset1 span22">
		<h1 class="text-center">Photos</h1>

		<br></br>

		<?php foreach($folders as $key => $galeria) {?>
			<li><a href="<?php echo site_url('fotos/vendo/'.urldecode($galeria)); ?>"><?php echo $galeria; ?></a></li>
		<?php } ?>
	</div>
</div>
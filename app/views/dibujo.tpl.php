
	<div id="colorlib-work">
		<div class="container">
			<?php if (!$result->has_full): ?>
			<div class="row row-padded-bottom">
				<div class="col-md-7 animate-box">
					<img id="img" class="img-responsive" src="<?=base_url?>res/images/<?=$result->img?>.jpg" alt="<?=$result->titulo?>">
				</div>
				<div class="col-md-4 col-md-push-1 animate-box ">
					<div class="work-detail">
						<p class="tag"><span><?=$result->nombre_categoria?></span> | <span><?=$result->date?></span></p>
						<h2><?=$result->titulo?></h2>
						<p><?=$result->texto?></p>
					</div>
				</div>
			</div>
		<?php endif;?>
			<?php if ($result->has_full): ?>
			<div class="cabeceraBlog text-center">
				<h2 class="pull-left"><?=$result->titulo?> </h2> <p class="tag pBlog"><span><?=$result->nombre_categoria?></span> | <span><?=$result->date?></span>
			</div>
				<div class="col-md-12 animate-box" style="margin-bottom: 4em;">
					<!-- Scroll fix content-->
					<img id="img" class="img-responsive" src="<?=base_url?>res/images/<?=$result->has_full?>" alt="<?=$result->titulo?>">
				</div>
				<?php if (!is_null($result->texto)): ?>
				<div class="col-md-12 animate-box text-center" >
				 	<p><?=$result->texto?></p>
				</div>
				<?php endif;?>
			<?php endif;?>
			<?=DibujoController::cargarRelacionados($result->nombre_categoria)?>
		</div>
	</div>
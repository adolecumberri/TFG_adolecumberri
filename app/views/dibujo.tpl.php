
	<div id="colorlib-work">
		<div class="container">
			<div class="row row-padded-bottom">
				<div class="col-md-7 animate-box">
					<!-- Scroll fix content-->
					<img class="img-responsive" src="res/images/<?=$result->img?>.jpg" alt="work">
				</div>
				<div class="col-md-4 col-md-push-1 animate-box">
					<div class="work-detail">
						<p class="tag"><span><?= $result->nombre_categoria ?></span> | <span><?= $result->date?></span></p>
						<h2><?= $result->titulo?></h2>
						<p><?= $result->texto?></p>
					</div>
				</div>
			</div>
			<?= DibujoController::cargarRelacionados($result->nombre_categoria)?>
		</div>
	</div>
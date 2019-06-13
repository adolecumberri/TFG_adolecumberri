<div id="colorlib-work">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
						<h2>Portafolios</h2>
					</div>
				</div>
				<div class="row row-padded-bottom">
				<?php foreach ($result as $dibujo): ?>
				<?php if ($dibujo->deleted == '0'): ?>
									<div class="col-md-4 animate-box text-center fadeInUp animated">
										<a href="<?=base_url?>Dibujo/show/<?=$dibujo->id?>" class="work-img" style="background-image: url(<?=base_url?>res/images/<?=$dibujo->img?>);">
											<div class="overlay"></div>
											<div class="desc">
												<span class="icon"><i class="icon-heart-outline"></i></span>
												<p class="tag"><span><?=$dibujo->titulo?></span>. <span><?=$dibujo->categoria?></span></p>
												<h3><?=$dibujo->titulo?></h3>
												<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
											</div>
										</a>
									</div>

					<?php endif;?>
				<?php endforeach;?>

				</div>
			</div>
			<div class="container">
				<div class="row">
					<p class="prev-next">
						<?php if (!isset($_REQUEST['page']) || $_REQUEST['page'] == '0') { /*nada*/} else {?>
							<a href="<?=intval($_REQUEST['page']) - 1;?>" class="previous text-left"><i class="icon-arrow-left4"></i> Previous</a>
						<?php }
if (isset($_REQUEST['page']) && $_REQUEST['page'] == $_COOKIE['maxPagDibujos']) {
	/*nada*/
} else {?>

						<a href="<?=intval($_REQUEST['page']) + 1;?>" class="next text-right">Next <i class="icon-arrow-right4"></i></a>
<?php }?>
					</p>
				</div>
			</div>
</div>
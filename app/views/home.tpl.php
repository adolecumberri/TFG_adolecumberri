
	<div id="colorlib-work">
			<div class="container-fluid">
				<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
							<h2>Bienvenidos</h2>
						</div>
				</div>
				<div class="row row-padded-bottom">
					<div class="blog-flex">

							<?php
foreach ($result as $item): if (is_null($item->img)) {?> <!-- true == texto -->

													<div class="col-md-5 zoom">
											            <a href="<?=base_url?>Blog/show/<?=$item->id?>" class="f-blog animate-box fadeInUp animated">
											                <p class="meta"><span><?=$item->categoria?> </span> | <span><?=$item->date?></span></p>
											                <h3 class="tituloBlog"><?=$item->titulo?></h3>
											                <span class="read-more the-arrow -right">Read more <i class="icon-arrow-right3 arrow1"></i></span>
											            </a>
											        </div>
												<?php } else {?>
													<div class="col-md-6 animate-box text-center fadeInUp animated">
														<a href="<?=base_url?>Dibujo/show/<?=$item->id?>" class="work-img" style="background-image: url(<?=base_url?>res/images/<?=$item->img?>);">
															<div class="overlay"></div>
															<div class="desc">
																<span class="icon"><i class="icon-heart-outline"></i></span>
																<p class="tag"><span><?=$item->titulo?></span>, <span>Logo</span></p>
																<h3><?=$item->titulo?></h3>
																<span class="read-more">Read more <i class="icon-arrow-right3"></i></span>
															</div>
														</a>
													</div>

												<?php }
endforeach;?>
					</div>
<!-- Paginación.-->

				</div>
			</div>
			<div class="container">
				<div class="row">
					<p class="prev-next">
						<?php if (!isset($_REQUEST['page']) || $_REQUEST['page'] == '0') { /*nada*/} else {?>
							<a href="<?=intval($_REQUEST['page']) - 1;?>" class="previous text-left"><i class="icon-arrow-left4"></i> Previous</a>
						<?php }
if (isset($_REQUEST['page']) && $_REQUEST['page'] == $_COOKIE['maxPagHome']) {
	/*nada*/
} else {
	if (isset($_REQUEST['page'])): ?>
					<a href="<?=intval($_REQUEST['page']) + 1;?>" class="next text-right">Next <i class="icon-arrow-right4"></i></a>

	<?php
else:
	?>
					<a href="Home/grid/1" class="next text-right">Next <i class="icon-arrow-right4"></i></a>

	<?php
endif;
}?>

					</p>
				</div>
			</div>
	</div>

<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
						<h2>Blogs</h2>
					</div>
				</div>

			<!-- Aqui va la creación  programatica de -->

<div class ="row">
        <div class="blog-flex">
            <?php foreach ($result as $blog): ?>
                <?php if ($blog->deleted == '0'): ?>

                    <div class="col-md-5 zoom">
                        <a href="<?=base_url?>Blog/show/<?=$blog->id?>" class="f-blog animate-box fadeInUp animated">
                            <p class="meta"><span><?=$blog->categoria?> </span> | <span><?=$blog->date?></span></p>
                            <h3 class="tituloBlog"><?=$blog->titulo?></h3>
                            <span class="read-more the-arrow -right">Read more <i class="icon-arrow-right3 arrow1"></i></span>
                        </a>

                    </div>

                <?php endif;?>
            <?php endforeach;?>
        </div>
</div>
			<!--  aqui acaba la creacion programatica -->

			</div>
			<div class="container">
				<div class="row">
					<p class="prev-next">
						<?php if (!isset($_REQUEST['page']) || $_REQUEST['page'] == '0') { /*nada*/} else {?>
							<a href="<?=intval($_REQUEST['page']) - 1;?>" class="previous text-left"><i class="icon-arrow-left4"></i> Previous</a>
						<?php }
if (isset($_REQUEST['page']) && $_REQUEST['page'] == $_COOKIE['maxPagBlog']) {
	/*nada*/
} else {?>

						<a href="<?=intval($_REQUEST['page']) + 1;?>" class="next text-right">Next <i class="icon-arrow-right4"></i></a>
<?php }?>
					</p>
					</p>
				</div>
			</div>
</div>


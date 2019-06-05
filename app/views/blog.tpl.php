
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
                    <div class="col-md-6 zoom ">
                        <a href="#" class="f-blog animate-box fadeInUp animated">
                            <p class="meta"><span style="border-right: 2px solid #eee; padding-right: 1em;"> <?=$blog->categoria?> </span><span style="padding-left: 1em;"><?=$blog->date?></span></p>
                            <h3 class="text-white"><?=$blog->titulo?></h3>
                            <p class="read-more">Read more <i class="icon-arrow-right3"></i></p>
                        </a>

                    </div>

                <?php endif;?>
            <?php endforeach;?>
        </div>
</div>



			</div>
			<div class="container">
				<div class="row">
					<p class="prev-next">
						<a href="#" class="previous text-left"><i class="icon-arrow-left4"></i> Previous</a>
						<a href="#" class="next text-right">Next <i class="icon-arrow-right4"></i></a>
					</p>
				</div>
			</div>
</div>


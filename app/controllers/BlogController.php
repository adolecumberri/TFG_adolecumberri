<?php
include_once 'app/models/BlogModel.php';
class BlogController extends Controller {

	public function __construct() {
		$objBlog = new BlogModel();
		$numCol = $objBlog->getColNum();
		$numPag = intval((($numCol + 2) / 3) - 1); //pageCount = (records + recordsPerPage - 1) / recordsPerPage;
		setcookie('maxPagBlog', $numPag);
	}

	public function grid() {
		$objBlog = new BlogModel();

		if (isset($_REQUEST['page'])) {
			$retorno = $objBlog->getAll($_REQUEST['page']);
		} else {
			$retorno = $objBlog->getAll('1');
		}
		$this->setView('blogs.tpl.php');
		/*var_dump($retorno);
		die();*/
		return $retorno;
	}
	public function show() {
		$id = $_REQUEST['page']; // el 3º valor se llama page. pero en realidad es la ID.
		$objBlog = new BlogModel();
		$retorno = $objBlog->getOne($id);
		$this->setView('blog.tpl.php');
		return $retorno;
	}

	public static function loadHeader() {
		$retorno = '
		<!-- pagina 1-->
			   	<li style="background-image: url(res/images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Sobre qué escribimos</h2>
				   					<h1>Nuestros Blogs</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	';
		return $retorno;
	}

	public function getAll() {
		$modelCat = new DibujoModel();
		$query = " SELECT `id`, `titulo` FROM `blogs`;";
		$retorno = $modelCat->rawQuery($query);
		return $retorno;
	}

}

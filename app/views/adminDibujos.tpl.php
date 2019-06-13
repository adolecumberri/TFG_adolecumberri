
<div id="colorlib-blog">
		<div class="container">
			<!-- Btn para retroceder-->
			<input type="button" name="nombre" value="⟵" onclick="window.location.href = '<?=base_url?>admin/panel/0';">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
					<h2>Crear Dibujos.</h2>
				</div>
			</div>
		</div>
	<div class="container ">
		<form action="#" method="post">
			<div class="row">
				<div class="col-md-6">
					<label for="titulo">Titulo</label></br>
					<input type="text" name="titulo" class="col-md-12">
				</div>


				<div class="col-md-3">
					<label for="is_text">is texto</label><br>
					<select name="categorias" class="inputSelect col-md-12">
						<option value="0">No</option>
						<option value="1">SI</option>
					</select>
				</div>
				<div class="col-md-3">
					<label for="id_texto">blogs Relacionado</label><br>
					<select name="id_texto" class="inputSelect col-md-12">
						<option value="">No</option>
						<?php foreach ($result['blogs'] as $textos): ?>
							<option value="<?=$textos->id?>"> <?=$textos->titulo?> </option>
						<?php endforeach;?>
					</select>
				</div>


			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<label for="img">Imagen</label><br>
					<input type="text" name="img" class="col-md-12">
				</div>

				<div class="col-md-4">
					<label for="id_categorias">id Categoria</label><br>
					<input type="text" name="id_categorias" class="col-md-12">
				</div>
				<div class="col-md-4">
					<label for="has_full">has_full</label><br>
					<input type="text" name="has_full" class="col-md-12">
				</div>

			</div>
			<input type="submit" name="Crear">
		</form>

	</div>
		<hr>
		<hr>
		<div class="container">

			<div class="row">
				<div class="col-md-6 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
					<h2>Borrar Dibujos.</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class=" col-md-offset-2 loginAdmin   ">
				<form action="#" method="post">
					<select name="borrarBlog" class="inputSelect col-md-6">
						<?php foreach ($result['blogs'] as $blog): ?>
						<option value="<?=$blog->id?>"> <?=$blog->titulo?> </option>
						<?php endforeach;?>

					</select>
					<input type="submit" name="borrarBlog" value="Borrar">
				</form>
			</div>
		</div>

		<hr>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
					<h2>Actualizar Dibujos.</h2>
				</div>
			</div>
		</div>
	<div class="container ">
		<form action="#" method="post">
			<div class="row">
				<div class="col-md-2">
					<label for="id">Id</label></br>
					<input type="text" name="id" class="col-md-12">
				</div>


				<div class="col-md-4">
					<label for="titulo">Titulo</label></br>
					<input type="text" name="titulo" class="col-md-12">
				</div>


				<div class="col-md-3">
					<label for="is_text">is texto</label><br>
					<select name="categorias" class="inputSelect col-md-12">
						<option value="0">No</option>
						<option value="1">SI</option>
					</select>
				</div>
				<div class="col-md-3">
					<label for="id_texto">blogs Relacionado</label><br>
					<select name="id_texto" class="inputSelect col-md-12">
						<option value="">No</option>
						<?php foreach ($result['blogs'] as $textos): ?>
							<option value="<?=$textos->id?>"> <?=$textos->titulo?> </option>
						<?php endforeach;?>
					</select>
				</div>


			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<label for="img">Imagen</label><br>
					<input type="text" name="img" class="col-md-12">
				</div>

				<div class="col-md-4">
					<label for="id_categorias">id Categoria</label><br>
					<input type="text" name="id_categorias" class="col-md-12">
				</div>
				<div class="col-md-4">
					<label for="has_full">has_full</label><br>
					<input type="text" name="has_full" class="col-md-12">
				</div>

			</div>
			<input type="submit" name="Crear">
		</form>

	</div>

</div>

<link rel="stylesheet" href="<?=base_url?>res/css/custom.css">
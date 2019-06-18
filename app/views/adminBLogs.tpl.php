
<div id="colorlib-blog">
		<div class="container">
			<!-- Btn para retroceder-->
			<input type="button" name="nombre" value="⟵" onclick="window.location.href = '<?=base_url?>admin/panel/0';">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
					<h2>Crear Blogs.</h2>
				</div>
			</div>
		</div>
	<div class="container ">
		<form action="<?=base_url?>admin/addDibujo/0" method="post">
			<div class="row">
				<div class="col-md-8">
					<label for="titulo">Titulo</label></br>
					<input type="text" name="titulo" class="col-md-12">
				</div>

				<div class="col-md-4">
					<label for="categorias">Categoria</label><br>
					<select name="categorias" class="inputSelect col-md-12">
						<option value="">Categorias</option>
						<?php foreach ($result['categorias'] as $categoria): ?>
							<option value="<?=$categoria->id?>"> <?=$categoria->nombre?> </option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="texto">Texto</label></br>
					<textarea  cols="50"></textarea>
				</div>
				<div class="col-md-3">
					<label for="is_dibujo">is dibujo</label><br>
					<select name="categorias" class="inputSelect col-md-12">
						<option value="0">No</option>
						<option value="1">SI</option>

					</select>
				</div>
				<div class="col-md-3">
					<label for="id_dibujo">Dibujo Relacionado</label><br>
					<select name="id_dibujo" class="inputSelect col-md-12">
						<option value="">No</option>
						<?php foreach ($result['dibujos'] as $dibujos): ?>
							<option value="<?=$dibujos->id?>"> <?=$dibujos->titulo?> </option>
						<?php endforeach;?>
					</select>
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
					<h2>Borrar Blog.</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class=" col-md-offset-2 loginAdmin   ">
				<form action="<?=base_url?>admin/deleteDibujo/0" method="post">
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
					<h2>Actualizar Blogs.</h2>
				</div>
			</div>
		</div>
	<div class="container ">

		<form action="<?=base_url?>admin/alterDibujo/0" method="post">
			<div class="row">
				<div class="col-md-2">
					<label for="id">id</label></br>
					<input type="text" name="id" class="col-md-12">
				</div>
				<div class="col-md-6">
					<label for="titulo">Titulo</label></br>
					<input type="text" name="titulo" class="col-md-12">
				</div>

				<div class="col-md-4">
					<label for="categorias">Categoria</label><br>
					<select name="categorias" class="inputSelect col-md-12">
						<option value="">Categorias</option>
						<?php foreach ($result['categorias'] as $categoria): ?>
							<option value="<?=$categoria->id?>"> <?=$categoria->nombre?> </option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="texto">Texto</label></br>
					<textarea  cols="50"></textarea>
				</div>
				<div class="col-md-3">
					<label for="is_dibujo">is dibujo</label><br>
					<select name="categorias" class="inputSelect col-md-12">
						<option value="0">No</option>
						<option value="1">SI</option>

					</select>
				</div>
				<div class="col-md-3">
					<label for="id_dibujo">Dibujo Relacionado</label><br>
					<select name="id_dibujo" class="inputSelect col-md-12">
						<option value="">No</option>
						<?php foreach ($result['dibujos'] as $dibujos): ?>
							<option value="<?=$dibujos->id?>"> <?=$dibujos->titulo?> </option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<input type="submit" name="Crear">
		</form>
	</div>

</div>

<link rel="stylesheet" href="<?=base_url?>res/css/custom.css">
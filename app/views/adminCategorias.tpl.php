
<div id="colorlib-blog">
		<div class="container">
			<input type="button" name="nombre" value="⟵" onclick="window.location.href = '<?=base_url?>admin/panel/0';">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
					<h2>Crear Categoría.</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class=" col-md-offset-2 loginAdmin  ">
				<form action="<?=base_url?>admin/crearCategorias/0" method="post">
					<input type="text" name="nombreAdd">
					<input type="submit" name="addCategoria" value="Crear" onclick="form.submit();">
				</form>
			</div>
		</div>
		<hr>
		<div class="container">

			<div class="row">
				<div class="col-md-6 col-md-offset-2 text-center animate-box intro-heading fadeInUp animated">
					<h2>Borrar Categoría.</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class=" col-md-offset-2 loginAdmin  ">
				<form action="<?=base_url?>admin/borrarCategorias/0" method="post">
					<select name="nombreBorrar" class="inputSelect">
						<?php foreach ($result as $item): ?>
						<option value="<?=$item->id?>"> <?=$item->nombre?> </option>
						<?php endforeach;?>

					</select>
					<input type="submit" name="borrarCategoria" value="Borrar">
				</form>
			</div>
		</div>
</div>

<link rel="stylesheet" href="<?=base_url?>res/css/custom.css">
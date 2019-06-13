<?php if (!$result): ?>
<div class ="colorlib-blog ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3  loginAdmin">
				<form action="<?=base_url?>admin/login/0" method="post">
					<label for="">Nombre</label><br>
					<input type="text" name="nick"/><br><br>

					<label for="">Contraseña</label><br>
					<input type="password" name="password"/><br>
					<hr>

					<input type="submit" value="Enter">
				</form>
			</div>
		</div>
	</div>
</div>
<?php else:
	header("Location: " . base_url . "admin/index/0");
	exit();
endif;?>

<link rel="stylesheet" href="<?=base_url?>res/css/custom.css">
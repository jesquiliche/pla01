<div class='container mt-3'>
	<form method="post" action="PLA01_mostrardatos.php" id="formulario">
		<div class="card col-lg-8 mx-auto p-3 mb-5 bg-white">
			<h1 class='card-title mx-auto mt-1'><b>PLA01: FORMULARI</b></h1>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group mb-1">
						<i class='fa fa-id-card fa-lg'></i>
						<label for='nif'>Nif</label>
						<input type="text" name="nif" id='nif' class="form-control mr-2" autofocus placeholder="Introduzca el NIF" <?php if ($includeJS) echo " required" ?>>
						<div id="nifError" class="mt-2 text-danger">

						</div>

					</div>
					<div class="form-group mb-1">
						<i class='fa fa-user-circle fa-lg'></i>
						<label for='nombre'>Nom</label>
						<input type="text" name="nombre" id='nombre' class="form-control" placeholder="Introduzca el nombre" <?php if ($includeJS) echo " required" ?>>

					</div>
					<div class="form-group mb-1">
						<i class='fa fa-user-circle fa-lg'></i>
						<label for='apellidos'>Gognoms</label>
						<input type="text" name="apellidos" id='apellidos' placeholder="Introduzca los apellidos" class="form-control" <?php if ($includeJS) echo " required" ?>>

					</div>
					<div class="form-group mb-1">
						<i class='fa fa-envelope fa-lg'></i>
						<label for='email'>Email</label>
						<input type="email" name="email" id='email' class="form-control" placeholder="Introduzca el email" <?php if ($includeJS) echo " required" ?>>

						<div id="emailError" class="mt-2 text-danger">

						</div>
					</div>

				</div>
				<div class="col-lg-6">

					<div class="form-group mb-1">
						<label for='nota'>Nota exàmen</label>
						<input type="number" name="nota" id='nota' class="form-control" min="0" max=10 <?php if ($includeJS) echo " required" ?>>

					</div>
					<div class="form-group mb-1">
						<i class='fa fa-edit fa-lg mt-2'></i>
						<label for='mensaje'>Missatge</label>
						<textarea name='mensaje' id='mensaje' cols='22' rows='8' class="form-control" <?php if ($includeJS) echo " required" ?>>
							</textarea>
					</div>

				</div>
				<div class="mx-auto">
					<input type="submit" name="enviar" id="enviar" class="btn btn-danger mt-2" required>
				</div>
			</div>
	</form>

</div>
</div>
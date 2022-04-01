<?php

//Llamar a libreria de funciones de validacion
require_once "./utils/utils.php";

//Recoger valores del formulario
$nif = $_POST["nif"];
$nota = $_POST["nota"];
$mensaje = $_POST["mensaje"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];

//funciones para validar DNI y Email
$error=false;
$error = validateDNI($nif);
$error = validateEmail($email);
$error =isEmpty($Nombre);
$error =isEmpty($apellidos);
$error =isEmpty($Nota);
include "./components/head.php";



?>


<body>
	
	<?php include './components/cabecera.php' ?>
	<?php /*try{
	if(!$nifValido) $error.="Nif no valido\n";
	if(isEmpty($nombre)) $error.="Nombre requerido\n";
	if(isEmpty($nombre)) $error.="Apelldos requerido";
	throw new Exception("Validacion",1);
}
catch(Exception $e){
	$mensaje ="<script type='text/javascript'>
    alert('$error');

    </script>';";
	echo $mensaje;

	?>*/


?>

	<div class='container mt-3'>
		<form id="formulario">
			<div class="card col-lg-8 mx-auto p-3 mb-5 bg-white">
				<h1 class='card-title mx-auto mt-1'><b>PLA01: MOSTRAR DATOS</b></h1>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group mb-1">
							<i class='fa fa-id-card fa-lg'></i>

							<label for='nif'>Nif</label>
							<?php if (isEmpty($nif)) echo "
							<input type='text' 
								name='nif' 
								id='nif' 
								class='form-control'
								disabled>";
							else echo "
								<input type='text' 
								name='nif' 
								id='nif' 
								class='form-control'
								value=${nif}
								disabled>";	?>
							<div id="nifError" class="mt-2 text-danger">
								
								<?php echo !$nifValido ? "<i class='fa fa-times-circle' style='color: red'></i> NIF incorrecto" : null; ?>
							</div>

						</div>
						<div class="form-group mb-1">
							<i class='fa fa-user-circle fa-lg'></i>
							<label for='nombre'>Nom</label>
							<?php if (isEmpty($nombre)) echo "
							<input type='text' 
								name='nombre' 
								id='nombre' 
								class='form-control'
								disabled>";
							else echo "
								<input type='text' 
								name='nombre' 
								id='nombre' 
								class='form-control'
								value=${nombre}
								disabled>";
							?>


							<div id="errorNombre" class="mt-2 text-danger">

								<?php echo isEmpty($nombre) ? "<i class='fa fa-times-circle' style='color: red'></i> Nombre requerido" : null; ?>
							</div>
						</div>
						<div class="form-group mb-1">
							<i class='fa fa-user-circle fa-lg'></i>
							<label for='apellidos'>Gognoms</label>
							<?php if (isEmpty($apellidos)) echo "
							<input type='text' 
								name='apellidos' 
								id='apellidos' 
								class='form-control'
								disabled>";
							else echo "
								<input type='text' 
								name='apellidos' 
								id='apellidos' 
								class='form-control'
								value=${apellidos}
								disabled>";
							?>
							<div id="errorApellidos" class="mt-2 text-danger">
								<?php echo isEmpty($apellidos) ? "<i class='fa fa-times-circle' style='color: red'></i> Apellidos requeridos" : null; ?>
							</div>
						</div>
						<div class="form-group mb-1">
						
							<i class='fa fa-envelope fa-lg'></i>
							<label for='email'>Email</label>
							<input type="email" name="email" id='email' class="form-control" value=<?= $email ?> disabled>

							<div id="emailError" class="mt-2 text-danger">

								<?php echo !$emailValido ? "<i class='fa fa-times-circle' style='color: red'></i> Email incorrecto" : null; ?>
							</div>

						</div>

					</div>
					<div class="col-lg-6">
						<i class='fa-solid fa-escala-equilibrada fa-lg'></i>


						
						<label for='nota'>Nota exàmen</label>
						<div class="form-group mb-1 row">
							<div class="col-lg-3">
								<?php if (isEmpty($nota)) echo "
							<input type='number'  
								name='nota' 
								id='nif' 
								class='form-control'
								disabled>";
								else echo "
								<input type='nota' 
								name='nota' 
								id='nota' 
								class='form-control'
								value=${nota}

								disabled>";	?>
							</div>
							<?php isNumber($nota, 0, 10) ?>
							<div| class="text-primary col-lg-9 mt-2 ">
								<?php $x = intval($nota);
								
								if ($x < 5)
									echo "<i class='fa fa-thumbs-down fa-lg' style='color:red'></i> Insuficiente";
								if ($x == 5 || $x == 6)
									echo "<i class='<i class='fa fa-thumbs-up fa-lg' style='color:green'></i>Aprobado";
								if ($x == 7 || $x == 8)
									echo "<i class='fa fa-thumbs-up fa-lg' style='color:green' ></i> Notable";
								if ($x == 9 || $x == 10)
									echo "<i class='fa fa-thumbs-up fa-lg' style='color:green'></i> Sobresaliente";


								?>
						</div>


						<div id="lNota" class="mt-2 text-danger">
							<?php echo isEmpty($nota) ? "<i class='fa fa-times-circle' style='color: red'></i> Nota requerida" : null; ?>
							<?php for ($x = 1; $x <= intval($nota); $x++) {
								
								if ($x < 5)
									echo "<button class='cuadrado rojo' disabled>";
								if ($x == 5 || $x == 6)
									echo "<button class='cuadrado amarillo' disabled>";
								if ($x == 7 || $x == 8)
									echo "<button class='cuadrado verde' disabled>";
								if ($x == 9 || $x == 10)
									echo "<button class='cuadrado azul' disabled>";
							}
							?>






						</div>
						<div class="form-group mb-1">
							<i class='fa fa-edit fa-lg mt-2'></i>
							<label for='mensaje'>Missatge</label>
							<textarea name='mensaje' id='mensaje' cols='22' rows='7' disabled class="form-control"><?php echo $mensaje ?>
						</textarea>
							<div id="errorMensaje" class="mt-2 text-danger">
								<?php echo isEmpty($mensaje) ? "<i class='fa fa-times-circle' style='color: red'></i> Mensaje requerido" : null; ?>
							</div>
						</div>

					</div>
				</div>
		</form>
		<?php
			$error=false;
			if($error) echo '
			<div class="card col-lg-8 mx-auto bg-white px-3 py-1">
				<div class="card-title">
					<h3>Errores</h3>
				</div>
				<div>
					<?php echo !$nifValido ? "<i class="fa fa-times-circle" style="color: red"></i> NIF incorrecto" : null; ?>
				</div>
				<div>
					<?php echo isEmpty($nombre) ? "<i class="fa fa-times-circle" style="color: red"></i> Nombre requerido" : null; ?>
				</div>
				<div>
					<?php echo isEmpty($apellidos) ? "<i class="fa fa-times-circle" style="color: red"></i> Apellidos requeridos" : null; ?>
				</div>
				<div>
					isEmpty($nota) ? "<i clasSs="fa fa-times-circle" style="color: red"></i> Nota requerida" : null;
				</div>
				<div id="errorMensaje">
					isEmpty($mensaje) ? "<i class="fa fa-times-circle" style="color: red"></i> Mensaje requerido" : null;
				</div>

			</div>'
		?>
	</div>
	
	

</body>

</html>
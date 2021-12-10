<!DOCTYPE html>
<html lang="es">
<head>

	<title>Inicio de sesion</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">

</head>
<body>

	<section class="form-login">
		<h5>
			Inicio de sesión
		</h5>
		<form action="sesion.php" method="post" >
		<input class="controls" type="text" name="username" id="username" value="" placeholder="Usuario" required="">
		<input class="controls" type="password" name="password" id ="password"  value="" placeholder="Contraseña" required="">
		<label>
			<input type="checkbox" name="remember"><i></i> Recuerdame.
		</label>
		<button class="buttons" type="submit" name="ingresar">Iniciar session</button>
	

		</form>

	</section>

</body>
</html>
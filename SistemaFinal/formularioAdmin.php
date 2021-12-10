<!DOCTYPE html>
<html lang="es">
<head>

	<title>Form admin</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
	<section class="form-Regis">
		<h5>
			Registro de administrador
		</h5>
		<form action="CRUD_administrador.php" method="post">
		<input class="controls" type="text" name="nombres" id="nombres" value="" placeholder="Ingrese sus nombres" required="">
        <input type="text" class="controls" name="aPaterno" id="aPaterno" value="" placeholder="Ingrese su apellido paterno" required="">
        <input type="text" class="controls" name="aMaterno" id="aMaterno" value="" placeholder="Ingrese su apellido materno" required="">
        <input type="email" class="controls" name="email" id="email" value="" placeholder="Ingrese su correo electronico" required="">
        <input type="text" class="controls" name="username" id="username" value="" placeholder="Ingrese su nombre de usuario" required="">
		<input class="controls" type="password" name="password" id ="password"  value="" placeholder="Contraseña" required="">
		
		<button class="buttons" type="submit" name="Registrar">Guardar </button>
		<p><a href="ListaAdministradores.php" >Volver</a></p>
	</form>
	</section>
</body>
</html>
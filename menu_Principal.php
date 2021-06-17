<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	echo "";

} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='Login.php'>Login</a>";


exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "La sesion ha expirado";

exit;
}
?>

<!DOCTYPE html>
<html>
<head>



	<title>Menu principal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
		
		<ul class="menu_principal">
			
			<li><a href="#">Inicio</a></li>
			<li><a href="ListaAlumnos.php">Alumnos</a></li>
			<li><a href="ListaMestros.php">Maestros</a></li>
			<li><a href="#">Usuarios</a>
				<ul>
					
					<li><a href="ListaUsuarioAlumno.php">Alumno</a></li>
					<li><a href="ListaUsuariosMaestros.php">Maestro</a></li>
					<li><a href="ListaAdministradores.php">Administrador</a></li>
					
				</ul>
			</li>
			
			<li><a href="Login.php">Cerrar sesion</a></li>
		</ul>
	
</body>
</html>

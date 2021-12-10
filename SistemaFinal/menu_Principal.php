<?php
session_start();
$id= $_SESSION['id'];
$nombre= $_SESSION['nombres'];
$aPaterno= $_SESSION['ap_paterno'];

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	echo "";

} else {
	echo'<script type="text/javascript">
	alert("Esta Pagina es solo para usuarios registrados.");
	window.location.href="Login.php";
	</script>';


exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo'<script type="text/javascript">
            alert("La session ha expirado, vuelva a iniciar session.");
            window.location.href="Login.php";
            </script>';

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
	<link rel="stylesheet" href="Estilos_CSS/tituloEstilos.css">

</head>
<body>
		
		<ul class="menu_principal">
			
			<li><a href="menu_Principal.php">Inicio</a></li>
			<li><a href="ListaAlumnos.php">Alumnos</a></li>
			<li><a href="ListaMaestros.php">Maestros</a></li>
			<li><a href="#">Usuarios</a>
				<ul>
					
					<li><a href="ListaUsuarioAlumno.php">Alumno</a></li>
					<li><a href="ListaUsuariosMaestros.php">Maestro</a></li>
					<li><a href="ListaAdministradores.php">Administrador</a></li>
					
				</ul>
			</li>
			<li><a href="ListaCursos.php"> Cursos </a></li>
			<li><a href="Logout.php">Cerrar sesion</a></li>

		</ul>


		<h2 style="text-align:center">Bienvenid@ : ) <?php echo" $nombre "." $aPaterno ";?>
		</h2>

	

</body>
</html>
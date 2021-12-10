<?php
session_start();
$id= $_SESSION['id'];
$nombre= $_SESSION['nombres'];
$aPaterno= $_SESSION['ap_paterno'];



if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	echo "";

} else {
	echo'<script type="text/javascript">
        alert("Esta pagina es solo para usuarios registrados");
        window.location.href="LoginMaestro.php";
        </script>';
   


exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo'<script type="text/javascript">
        alert("La session ha expirado, Inicie session de nuevo");
        window.location.href="LoginMaestro.php";
        </script>';

exit;
}
?>
<!DOCTYPE html>
<html>
<head>



	<title>Menu principal-Maestro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
		
<ul class="menu_principal">
			
			<li><a href="menu_PrincipalMaestros.php">Inicio</a></li>
			<li><a href="#">Perfil</a>
			<ul>
					
					<li><a href="perfilM.php">Mis datos</a></li>
					<li><a href="grupoAl.php">Grupo-alumnos</a></li>
					
					
			</ul>
			</li>
			<li><a href="Logout.php">Cerrar session</a></li>

			
		</ul>

		<h1 style="text-align:center">Bienvenid@ : ) <?php echo" $nombre "." $aPaterno ";?>
		</h1>
	
</body>
</html>
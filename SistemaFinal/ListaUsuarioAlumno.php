
<?php
session_start();
include_once('conexion.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    $sql = "call listUAlumnos";

    $datos = $conn->query($sql);

} else {
	echo'<script type="text/javascript">
	alert("Esta Pagina es solo para usuarios registrados. Inicie session");
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
	<title>Listado Usuarios Alumnos </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
    <link rel="stylesheet" href="Estilos_CSS/tablaEstilos.css">
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


	<table>
		<caption>Listado de Alumnos usuarios</caption>
		<thead>
			<tr>
				<th> Id</th>
				<th> Email</th>
				<th> Nombre de Usuario</th>
				<th> Apellido Paterno</th>
				<th> Apellido Materno</th>
				<th> Nombres</th>
				
				<th > Acciones</th>
				
			</tr>
		</thead>
		<tbody align="center">
			<?php
			while ($fila = mysqli_fetch_array($datos)) {
				
				
				
				echo "<tr>";
					
					echo "<td>".$fila['id']."</td>";
					echo "<td>".$fila['email']."</td>";
					echo "<td>".$fila['nom_usuario']."</td>";
					echo "<td>".$fila['ap_paterno']."</td>";
					echo "<td>".$fila['ap_materno']."</td>";
					echo "<td>".$fila['nombres']."</td>";
					echo "<td>  
				     <a  href='editarAlumnos.php?id=".$fila['id']."'> Editar </a>
				     <a href='eliminarAlumno.php?id=".$fila['id']."'> Eliminar</a>   
				     </td>";

				echo "<tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>
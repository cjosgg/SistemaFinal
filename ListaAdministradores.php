<?php
include_once('conexion.php');

$sql = "SELECT  id, email, nom_usuario, ap_paterno, ap_materno, nombres  FROM administrador ORDER BY id ASC";

$datos = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Listado Administradores </title>
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


	<table border="1" cellpadding="0"  class="tablaAlumnos">
		<caption>Listado de Alumnos usuarios</caption>
		<thead>
			<tr>
				<th scope="col"> Id</th>
				<th scope="col"> Email</th>
				<th scope="col"> Nombre de Usuario</th>
				<th scope="col"> Apellido Paterno</th>
				<th scope="col"> Apellido Materno</th>
				<th scope="col"> Nombres</th>
				
				<th scope="col"> Acciones</th>
				
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
				     <a  href='#'> Editar </a>
				     <a href='#'> Eliminar</a>   
				     </td>";

				echo "<tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>
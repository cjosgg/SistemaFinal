<?php
include_once('conexion.php');

$sql = "SELECT um.`id`, ap_paterno, ap_materno, nombres,c.`nombre` as nombre_curso  FROM u_maestros um 
INNER JOIN curso c ON um.`id`= c.`id_maestro` ORDER BY id ASC";

$datos = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Listado Administradores </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="Estilos_CSS/Estilos.css">
	<link rel="stylesheet" href="Estilos_CSS/tablaEstilos.css">
</head>
<body>
		
		<ul class="menu_principal">
			
			<li><a href="menu_Principal.php">Inicio</a></li>
			<li><a href="ListaAlumnos.php">Alumnos</a></li>
			<li><a href="#">Maestros</a></li>
			<li><a href="#">Usuarios</a>
				<ul>
					
					<li><a href="ListaUsuarioAlumno.php">Alumno</a></li>
					<li><a href="ListaUsuariosMaestros.php">Maestro</a></li>
					<li><a href="ListaAdministradores.php">Administrador</a></li>
					
				</ul>
			</li>
			
			<li><a href="Login.php">Cerrar sesion</a></li>
		</ul>


	<table>
		<caption>Listado de Maestros</caption>
		<thead>
			<tr>
				<th> Id</th>
				<th> Apellido Paterno</th>
				<th> Apellido Materno</th>
				<th> Nombres</th>
				<th> Curso que imparte</th>
				<th> Acciones</th>
				
			</tr>
		</thead>
		<tbody align="center">
			<?php
			while ($fila = mysqli_fetch_array($datos)) {
				
				
				
				echo "<tr>";
					
					echo "<td>".$fila['id']."</td>";
					echo "<td>".$fila['ap_paterno']."</td>";
					echo "<td>".$fila['ap_materno']."</td>";
					echo "<td>".$fila['nombres']."</td>";
					echo "<td>".$fila['nombre_curso']."</td>";
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

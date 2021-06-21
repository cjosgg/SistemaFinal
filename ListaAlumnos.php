<?php
include_once('conexion.php');

$sql = "SELECT ua.`id`,ua.`ap_paterno`,ua.`ap_materno`,ua.`nombres`, c.`nombre` AS nombre_curso, fechaInicio,fechaFin FROM grupo_alumnos ga
INNER JOIN u_alumnos ua ON ua.`id` = ga.`id_alumno`
INNER JOIN curso c ON c.`id`= ga.`id_curso`
INNER JOIN periodo p ON p.`id`= ga.`id_periodo` ORDER BY ua.`ap_paterno`, c.`nombre`";

$datos = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Listado Alumnos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="Estilos_CSS/Estilos.css">
	<link rel="stylesheet" href="Estilos_CSS/tablaEstilos.css">
</head>
<body>
	
		<ul class="menu_principal">
			
			<li><a href="menu_Principal.php">Inicio</a></li>
			<li><a href="#">Alumnos</a></li>
			<li><a href="ListaMaestros.php">Maestros</a></li>
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
		<caption>Listado de Alumnos</caption>
		<thead>
			<tr>
				<th> Id</th>
				<th> Apellido Paterno</th>
				<th> Apellido Materno</th>
				<th> Nombres</th>
				<th> Nombre del curso</th>
				<th> Inicio</th>
				<th> Fin</th>
				<th> Acciones</th>
				
			</tr>
		</thead>
			
			<?php
			while ($fila = mysqli_fetch_array($datos)) {
				
				
				
				echo "<tr>";
					
					echo "<td>".$fila['id']."</td>";
					echo "<td>".$fila['ap_paterno']."</td>";
					echo "<td>".$fila['ap_materno']."</td>";
					echo "<td>".$fila['nombres']."</td>";
					echo "<td>".$fila['nombre_curso']."</td>";
					echo "<td>".$fila['fechaInicio']."</td>";
					echo "<td>".$fila['fechaFin']."</td>";
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

<?php
include_once('conexion.php');

$sql = "SELECT c.`id`, c.`nombre` AS nombre_curso, um.`ap_paterno`, um.`ap_materno`, um.`nombres` FROM curso c 
INNER JOIN u_maestros um ON c.`id_maestro` = um.`id` ORDER BY um.`ap_paterno`, um.`ap_materno` ASC";

$datos = $conn->query($sql);
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
			<li><a href="#"> Cursos </a></li>
			<li><a href="Login.php">Cerrar sesion</a></li>
		</ul>


	<table>
		<caption>Listado de Cursos</caption>
		<thead>
			<tr>
				<th> Id</th>
				<th> Nombre del Curso</th>
				<th> Apellido Paterno</th>
				<th> Apellido Materno</th>
				<th> Nombres del Maestro</th>
				<th> Acciones</th>
				
			</tr>
		</thead>
		<tbody align="center">
			<?php
			while ($fila = mysqli_fetch_array($datos)) {
				
				
				
				echo "<tr>";
					
					echo "<td>".$fila['id']."</td>";
					echo "<td>".$fila['nombre_curso']."</td>";
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
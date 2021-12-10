
<?php
session_start();
$id= $_SESSION['id'];

include_once('conexion.php');

$id= $_SESSION['id'];

$sql = "SELECT ua.`ap_paterno`,ua.`ap_materno`,ua.`nombres`, c.`nombre`, fechaInicio,fechaFin, calificacion FROM grupo_alumnos ga
INNER JOIN u_alumnos ua ON ua.`id` = ga.`id_alumno`
INNER JOIN curso c ON c.`id`= ga.`id_curso`
INNER JOIN periodo p ON p.`id`= ga.`id_periodo` WHERE ua.`id`=$id  ORDER BY ua.`ap_paterno`, c.`nombre`;";

$datos = $conn->query($sql);


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	

} else {
	echo'<script type="text/javascript">
        alert("Esta pagina es solo para usuarios registrados");
        window.location.href="LoginAlumno.php";
        </script>';
   


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
	<title>Historial Ac </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
    <link rel="stylesheet" href="Estilos_CSS/tablaEstilos.css">
</head>
<body>
		
<ul class="menu_principal">
			
			<li><a href="menu_PrincipalAlumnos.php">Inicio</a></li>
			<li><a href="#">Perfil</a>
			<ul>
					
					<li><a href="perfilAl.php">Mis datos</a></li>
					<li><a href="historialAc.php">Historial Academico</a></li>
					
					
			</ul>
			</li>
			<li><a href="Logout.php">Cerrar session</a></li>

			
		</ul>


	<table>
		<caption>Historial Academico</caption>
		<thead>
			<tr>
				
				<th> Apellido Paterno</th>
                <th> Apellido Materno</th>
				<th> Nombres</th>
				<th> Nombre del curso</th>
				<th> Fecha de Inicio</th>
				<th> Fecha fin</th>
                <th> Calificacion</th>

				
			</tr>
		</thead>
		<tbody align="center">
			<?php
			while ($fila = mysqli_fetch_array($datos)) {
				
				
				
				echo "<tr>";
					
					echo "<td>".$fila['ap_paterno']."</td>";
					echo "<td>".$fila['ap_materno']."</td>";
					echo "<td>".$fila['nombres']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
					echo "<td>".$fila['fechaInicio']."</td>";
					echo "<td>".$fila['fechaFin']."</td>";
                    echo "<td>".$fila['calificacion']."</td>";
					

				echo "<tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>

<?php
session_start();
$id= $_SESSION['id'];

include_once('conexion.php');

$id= $_SESSION['id'];

$sql = "SELECT ga.id AS ida, ua.`ap_paterno`,ua.`ap_materno`,ua.`nombres`, c.`nombre` AS nombre_curso, calificacion FROM grupo_alumnos ga
INNER JOIN u_alumnos ua ON ua.`id` = ga.`id_alumno`
INNER JOIN curso c ON c.`id`= ga.`id_curso` 
INNER JOIN u_maestros um ON c.`id_maestro`= um.`id` WHERE c.`id_maestro`= $id ORDER BY ua.`ap_paterno`, c.`nombre`";

$datos = $conn->query($sql);

$sql2= "SELECT nombre FROM curso WHERE id_maestro=$id";
$datos2 = $conn->query($sql2);

$sql3= "SELECT fechaInicio, fechaFin FROM periodo";
$datos3 = $conn->query($sql3);


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	

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
        alert("La session ha expirado, vuelva a registrarse");
        window.location.href="LoginMaestro.php";
        </script>';

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
			
			<li><a href="menu_PrincipalMaestros.php">Inicio</a></li>
			<li><a href="#">Perfil</a>
			<ul>
					
					<li><a href="perfilM.php">Mis datos</a></li>
					<li><a href="grupoAl.php">Grupo-alumnos</a></li>
					
					
			</ul>
			</li>
			<li><a href="Logout.php">Cerrar session</a></li>

			
		</ul>
    <?php  while ($fila2 = mysqli_fetch_array($datos2)) {
		echo "<strong>"."Nombre del curso: "."</strong>".$fila2['nombre']."<br>";
		}
		
		while ($fila3 = mysqli_fetch_array($datos3)) {
			echo "<strong>"."Periodo: "."</strong>"."Del ".$fila3['fechaInicio']." Al ".$fila3['fechaFin'];
		}	
	?>
	<table>
		<caption>Lista de Alumnos</caption>
		<thead>
			<tr>
				
                <th> Id</th>
				<th> Apellido Paterno</th>
                <th> Apellido Materno</th>
				<th> Nombres</th>
                <th> Calificacion</th>
                <th> Accion</th>

				
			</tr>
		</thead>
		<tbody align="center">
			<?php
			while ($fila = mysqli_fetch_array($datos)) {
				
				
				
				echo "<tr>";
					echo "<td>".$fila['ida']."</td>";
					echo "<td>".$fila['ap_paterno']."</td>";
					echo "<td>".$fila['ap_materno']."</td>";
					echo "<td>".$fila['nombres']."</td>";
                    echo "<td>".$fila['calificacion']."</td>";
                    echo "<td>  
				    <a href='editarCal.php?id=".$fila['ida']."'> Calificacar/Editar </a>
                    
				     </td>";

				echo "<tr>";
					

				echo "<tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>
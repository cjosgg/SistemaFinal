<?php
session_start();
$id = $_SESSION['id'];
include_once('conexion.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {





  $sql = "call perfilAl($id)";

  $datos = $conn->query($sql);

	


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
echo'<script type="text/javascript">
        alert(""La sesion ha expirado, vuelva a iniciar session");
        window.location.href="LoginAlumno.php";
        </script>';

exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> perfil-alumno</title>
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
		<caption>Mis datos</caption>
		<thead>
			<tr>
				<th> Id</th>
				<th> Apellido Paterno</th>
				<th> Apellido Materno</th>
				<th> Nombres</th>
				<th> edad</th>
				<th> email</th>
				<th> Nombre de usuario</th>
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
                    echo "<td>".$fila['edad']."</td>";
					echo "<td>".$fila['email']."</td>";
					echo "<td>".$fila['nom_usuario']."</td>";
					
					
					echo "<td>  
				     <a  href='editarPerfilAl.php?id=".$fila['id']."'> Editar </a>   
				     </td>";

				echo "<tr>";
			}
			?>
		</tbody>
	</table>

</body>
</html>
<?php

include_once('conexion.php');
include_once('getMaestro.php');


if(isset($_GET['id'])){
  
  $id = $_GET['id'];

  $sql = " select * from curso where curso.`id`= $id ";

  $datos = $conn->query($sql);

  if ( $fila = mysqli_fetch_array($datos) ) {

		$nomCurso = $fila['nombre'];
		$Nmaestro = $fila['id_maestro'];
		
  }

}
else
die("se necesita un ID");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
    <form class="form-Regis" action="CRUD_curso.php"
    method="post">
    <h5>
			Editar Curso
	</h5>
        <label>ID del curso</label>
        <input type="text" name="id" id="id" required="" class="controls" value='<?php echo $id; ?>' readonly >
        <label>Nombre</label>
        <input type="text" name="nomCurso" id="nomCurso" class="controls"value='<?php echo $nomCurso; ?>' required="">
        <select class="controls" required name="Nmaestro" id="Nmaestro">
            <?php

				foreach ($amaestro as $value) {

					if($value[0]==$Nmaestro)
						echo "<option value='$value[0]' selected>$value[1] $value[2] </option>";
					else
					    echo "<option value='$value[0]'>$value[1] $value[2] </option>";
				}


			?>
        </select>
        <input class="buttons" type="submit" name="Editar">
    </form>
</body>
</html>
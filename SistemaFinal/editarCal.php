<?php

include_once('conexion.php');
require_once("getAlumno.php");
require_once("getCurso.php");
require_once("getPeriodo.php");


if(isset($_GET['id'])){
  
  $id = $_GET['id'];

  $sql = " SELECT * FROM grupo_alumnos WHERE id=$id";

  $datos = $conn->query($sql);

  if ( $fila = mysqli_fetch_array($datos) ) {
  
    $Nalumno = $fila['id_alumno'];
    $Ncurso = $fila['id_curso'];
    $Periodo = $fila['id_periodo'];
	  $calificacion = $fila['calificacion'];
	  
		
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
    <title>Editar perfil-alumno</title>
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
<section class="form-Regis">
		<h5>
			Editar perfil
		</h5>
    
    
		<form action="CRUD_alumnos.php" method="post">
    <label>ID </label>
    <input type="text" name="id" id="id" required="" class="controls" value='<?php echo $id; ?>' readonly >
    <label>Nombre del Alumno</label> 
    <select required name="Nalumno" id="Nalumno" class="controls" disabled>
        <?php

          foreach ($galumno as $value) {
            if($value[0]==$Nalumno)
              echo "<option value='$value[0]' selected>$value[1]  $value[2]  $value[3]</option>";
            else
              echo "<option value='$value[0]'>$value[1] $value[2] </option>";
          }
        ?>
        </select>
        <label>Curso</label>
        <select required name="Ncurso" id="Ncurso" class="controls" disabled>
        <?php

          foreach ($gcurso as $value) {
      
            if($value[0]==$Ncurso)
              echo "<option value='$value[0]' selected>$value[1]</option>";
            else
              echo "<option value='$value[0]'>$value[1] </option>";           
          }
        ?>
        </select>
        <label>periodo</label>
        <select required name="Periodo" id="Periodo" class="controls" disabled>
        
        <?php

          foreach ($gperiodo as $value) {
      
            if($value[0]==$Periodo)
              echo "<option value='$value[0]' selected>$value[1] $value[2]</option>";
            else
              echo "<option value='$value[0]'>$value[1] $value[2]</option>";           
          }
        ?>
        </select>
        
        <label>calificacion</label>
        <input type="number" name="calificacion" id="calificacion" required="" class="controls" value='<?php echo $calificacion; ?>' min="5" max="10" >
		<p><a href="grupoAl.php" >Volver</a></p>
		
    <button class="buttons" type="submit" name="calificar"> Guardar cambios</button>
		</form>
	</section>
</body>
</html>
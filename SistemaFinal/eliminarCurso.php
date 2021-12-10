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
    <title>Eliminar Curso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
    <form class="form-Regis" action="CRUD_curso.php"
    method="post">
    <h5>
			¿Esta segudo de eliminar este curso?
	</h5>
        <label>ID del curso</label>
        <input type="text" name="id" id="id" required="" class="controls" value='<?php echo $id; ?>' readonly >
        <label>Nombre</label>
        <input type="text" name="nomCurso" id="nomCurso" class="controls" readonly value='<?php echo $nomCurso; ?>' required="">
        <select class="controls" required name="Nmaestro" id="Nmaestro" readonly>
            <?php

				foreach ($amaestro as $value) {

					if($value[0]==$Nmaestro)
						echo "<option value='$value[0]' selected>$value[1] $value[2] </option>";
					else
					    echo "<option value='$value[0]'>$value[1] $value[2] </option>";
				}


			?>
        </select>
        <p><a href="ListaCursos.php">Cancelar</a></p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Eliminar
    </button>

  <div style="color: black" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Advertencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de eliminar este registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="Eliminar" >Eliminar</button>
      </div>
    </div>
  </div>
</div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php

include_once('conexion.php');


if(isset($_GET['id'])){
  
  $id = $_GET['id'];

  $sql = " select * from u_maestros where id= $id ";

  $datos = $conn->query($sql);

  if ( $fila = mysqli_fetch_array($datos) ) {

		$nombres = $fila['nombres'];
		$aPaterno = $fila['ap_paterno'];
        $aMaterno = $fila['ap_materno'];
		$edad = $fila['edad'];
        $email = $fila['email'];
        $username = $fila['nom_usuario'];
		$password = $fila['contrasenia'];
		
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
    <title>Eliminar usuario-maestro </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
<section class="form-Regis">
		<h5>
			Eliminar Usuario-maestro
		</h5>
		<form action="CRUD_maestros.php" method="post">
        <label>ID del alumno</label>
        <input type="text" name="id" id="id" required="" class="controls" value='<?php echo $id; ?>' readonly >
		<input class="controls" type="text" name="nombres" id="nombres"  placeholder="Ingrese sus nombres" value='<?php echo $nombres; ?>' required="" readonly>
        <input type="text" class="controls" name="aPaterno" id="aPaterno"  placeholder="Ingrese su apellido paterno" value='<?php echo $aPaterno; ?>' required="" readonly>
        <input type="text" class="controls" name="aMaterno" id="aMaterno"  placeholder="Ingrese su apellido materno" value='<?php echo $aMaterno; ?>' required="" readonly>
        <input type="number" class="controls" name="edad" id="edad"  placeholder="Ingrese su edad" value='<?php echo $edad; ?>' required readonly>
        <input type="email" class="controls" name="email" id="email"  placeholder="Ingrese su correo electronico"value='<?php echo $email; ?>' required=""readonly>
        <input type="text" class="controls" name="username" id="username"  placeholder="Ingrese su nombre de usuario" value='<?php echo $username; ?>' required=""readonly>
		
		<p><a href="ListaUsuariosMaestros.php" >cancelar</a></p>
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
	</section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
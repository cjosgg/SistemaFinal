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
    <title>Editar Curso</title>
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
<section class="form-Regis">
		<h5>
			editar usuario-maestro
		</h5>
		<form action="CRUD_maestros.php" method="post">
        <label>ID del alumno</label>
        <input type="text" name="id" id="id" required="" class="controls" value='<?php echo $id; ?>' readonly >
		<input class="controls" type="text" name="nombres" id="nombres"  placeholder="Ingrese sus nombres" value='<?php echo $nombres; ?>' required="">
        <input type="text" class="controls" name="aPaterno" id="aPaterno"  placeholder="Ingrese su apellido paterno" value='<?php echo $aPaterno; ?>' required="">
        <input type="text" class="controls" name="aMaterno" id="aMaterno"  placeholder="Ingrese su apellido materno" value='<?php echo $aMaterno; ?>' required="">
        <input type="number" class="controls" name="edad" id="edad"  placeholder="Ingrese su edad" value='<?php echo $edad; ?>' required>
        <input type="email" class="controls" name="email" id="email"  placeholder="Ingrese su correo electronico"value='<?php echo $email; ?>' required="">
        <input type="text" class="controls" name="username" id="username"  placeholder="Ingrese su nombre de usuario" value='<?php echo $username; ?>' required="">
		<input class="controls" type="password" name="password" id ="password"   placeholder="Contraseña"value='<?php echo $password; ?>' required="">
		<p><a href="ListaUsuariosMaestros.php" >Volver</a></p>
        <button class="buttons" type="submit" name="Editar">Guardar cambios</button>
		</form>
	</section>
</body>
</html>
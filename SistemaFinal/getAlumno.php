<?php

require_once("conexion.php");
$galumno= array();
$sql ="select * from u_alumnos where status='Activo' order by id ";
$datos = $conn->query($sql);
while($fila = mysqli_fetch_array($datos)){
	$galumno[]= array($fila['id'],$fila['nombres'],$fila['ap_paterno'], $fila['ap_materno']);
	}
 ?>
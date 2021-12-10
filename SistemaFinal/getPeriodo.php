<?php

require_once("conexion.php");
$gperiodo= array();
$sql ="select * from periodo order by id ";
$datos = $conn->query($sql);
while($fila = mysqli_fetch_array($datos)){
	$gperiodo[]= array($fila['id'],$fila['fechaInicio'],$fila['fechaFin']);
	}
 ?>
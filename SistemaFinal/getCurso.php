<?php

require_once("conexion.php");
$gcurso= array();
$sql ="select * from curso where status='Activo' order by id ";
$datos = $conn->query($sql);
while($fila = mysqli_fetch_array($datos)){
	$gcurso[]= array($fila['id'],$fila['nombre']);
	}
 ?>
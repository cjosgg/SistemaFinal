<?php

require_once("conexion.php");
$amaestro= array();
$sql ="select * from u_maestros where status='Activo' order by id ";
$datos = $conn->query($sql);
while($fila = mysqli_fetch_array($datos)){
	$amaestro[]= array($fila['id'],$fila['nombres'],$fila['ap_paterno']);
	}
 ?>
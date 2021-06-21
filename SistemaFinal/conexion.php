<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


<?php 

	$host = "localhost";
	$user="root";
	$pass="";
	$db="conesc";

	$conn = new mysqli($host, $user, $pass, $db);

	//checar conexion
	if($conn->connect_errno ){

		echo"Error: Falló al conectarse a MySQL debido a: \n";
		echo "Error: ".$conn->connect_errno ."\n";
		echo "Error: ".$conn->connect_error ."\n";
		die;
	}

	echo ""



?>

</body>
</html>
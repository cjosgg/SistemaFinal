<?php

/*
setcookie("usuario","direccion@direccion.net", time() + (86400*7)); //Creacion de la cookie

echo $_COOKIE["usuario"]; //Asi se obtiene el valor de una cookie
*/


/* Verificacion de cookies soportadas en navegador
if(count($_COOKIE) > 0){

	echo "Cookies soportadas";

}else{

	echo "Cookies no soportadas.";

}
*/


$cookie_nombre = "Guardadin";
$cookie_contenido = "Desarrollo web 1  Desarrollo web 1Desarrollo web1"."echo <br>"."Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1Desarrollo web 1" . $_SERVER['REMOTE_ADDR'];
$cookie_contenido = $_SERVER['REMOTE_ADDR'];
$cookie_contenido = $_SERVER['HTTP_CLIENT_IP'];

// setcookie(nombre, contenido, vigencia, ruta);
setcookie($cookie_nombre, $cookie_contenido, time() + (86400 * 30), "/");

?>

<html>
<body>

<?php

if(!isset($_COOKIE[$cookie_nombre])) {
    echo "Nombre Cookie '" . $cookie_nombre . "'  No existe, recargue la página.";

} else {
    echo "La Cookie '" . $cookie_nombre . "' Existe.<br>";
    echo "Contenido: " . $_COOKIE[$cookie_nombre];
}
?>

</body>
</html>


?>
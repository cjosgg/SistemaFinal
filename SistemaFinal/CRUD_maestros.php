<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD usuario-maestro</title>
</head>
<body>
<?php

include_once("conexion.php");

if (isset($_POST["Registrar"])) {
    
    //$id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    
    

    $sql = "INSERT INTO u_maestros(nombres, ap_paterno, ap_materno, edad, email, nom_usuario, contrasenia, status) VALUES ('$nombres', '$aPaterno','$aMaterno','$edad','$email','$username','$password', 'Activo')";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
    alert("Los datos se han guardado con exito");
    window.location.href="LoginMaestro.php";
    </script>';
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-agregar

if (isset($_POST["Editar"])) {
    
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    

    $sql = "UPDATE u_maestros SET nombres='$nombres', ap_paterno='$aPaterno', ap_materno='$aMaterno', edad='$edad', email='$email', nom_usuario='$username', contrasenia='$password' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
        alert("Los datos se han editado con exito");
        window.location.href="ListaUsuariosMaestros.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar
if (isset($_POST["EditarM"])) {
    
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    
    

    $sql = "UPDATE u_maestros SET nombres='$nombres', ap_paterno='$aPaterno', ap_materno='$aMaterno', edad='$edad', email='$email', nom_usuario='$username' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
        alert("Los datos se han actualizado con exito");
        window.location.href="perfilM.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar desde la vista de maestros.


if (isset($_POST["Eliminar"])) {

    
    
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    

    $sql = "UPDATE u_maestros SET status='Inactivo' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        
        echo'<script type="text/javascript">
    alert("Los datos se han eliminado con exito");
    window.location.href="ListaUsuariosMaestros.php";
    </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Eliminar
?>

</body>
</html>
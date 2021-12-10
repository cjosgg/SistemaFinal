<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD usuario-Admin</title>
</head>
<body>
<?php

include_once("conexion.php");

if (isset($_POST["Registrar"])) {
    

    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    
    

    $sql = "INSERT INTO administrador(nombres, ap_paterno, ap_materno, email, nom_usuario, contrasenia, status) VALUES ('$nombres', '$aPaterno','$aMaterno','$email','$username','$password', 'Activo')";


    if (mysqli_query($conn, $sql)) {

        header('Location: ListaAdministradores.php');
    // echo'<script type="text/javascript">
    // alert("Los datos se han guardado con exito");
    // window.location.href=ListaAdministradores.php";
    // </script>';
        
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
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    

    $sql = "UPDATE administrador SET nombres='$nombres', ap_paterno='$aPaterno', ap_materno='$aMaterno', email='$email', nom_usuario='$username', contrasenia='$password' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
        window.location.href="ListaAdministradores.php";
        alert("Los datos se han editado con exito");
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar

if (isset($_POST["Eliminar"])) {
    
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    

    $sql = "UPDATE administrador SET status='Inactivo' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        
        echo'<script type="text/javascript">
    window.location.href="ListaAdministradores.php";
    alert("Los datos se han eliminado con exito");
    </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Eliminar
?>

</body>
</html>
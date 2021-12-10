<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD alumno-usuario</title>
</head>
<body>
<?php

include_once("conexion.php");

if (isset($_POST["Registrar"])) {
    
    
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    
    $sql = "INSERT INTO u_alumnos(nombres, ap_paterno, ap_materno, edad, email, nom_usuario, contrasenia, status) VALUES ('$nombres', '$aPaterno','$aMaterno','$edad','$email','$username','$password', 'Activo')";

    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
    alert("Los datos se han guardado con exito");
    window.location.href="FormularioCurso_alumno.php";
    </script>';
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-agregar

if (isset($_POST["IngresarGA"])) {
    
    
    $Nalumno = $_POST["Nalumno"];
    $Ncurso = $_POST["Ncurso"];
    $Nperiodo = $_POST["Nperiodo"];

    $sql = "Call insertGrupoAlumno('$Nalumno', '$Ncurso','$Nperiodo')";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
    alert("Los datos se han completado y guardado con exito");
    window.location.href="LoginAlumno.php";
    </script>';
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-agregar curso alumno

if (isset($_POST["Editar"])) {
    
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    
    

    $sql = "call UpdateUAlumnos('$nombres','$aPaterno','$aMaterno',$edad,'$email','$username','$password',$id)";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
        window.location.href="ListaUsuarioAlumno.php";
        alert("Los datos se han editado con exito");
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar

if (isset($_POST["EditarAl"])) {
    
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    
    

    $sql = "call UpdateUAlumnos('$nombres','$aPaterno','$aMaterno',$edad,'$email','$username','$password',$id)";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
        alert("Los datos se han actualizado con exito");
        window.location.href="perfilAl.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar desde la vista de alumno.

if (isset($_POST["EditarGal"])) {
    
    $ida = $_POST['id'];
    $Nalumno = $_POST["Nalumno"];
    $Ncurso = $_POST["Ncurso"];
    $Nperiodo = $_POST["Periodo"];
    
    

    $sql = "Call  UpdateGrupoAlumno('$Nalumno','$Ncurso','$Nperiodo','$ida')";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
        alert("Los datos se han actualizado con exito");
        window.location.href="ListaAlumnos.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar desde la vista de alumno.

if (isset($_POST["Eliminar"])) {
    
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    

    $sql = "UPDATE u_alumnos SET status='Inactivo' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        
        echo'<script type="text/javascript">
    alert("Los datos se han eliminado con exito");
    window.location.href="ListaUsuarioAlumno.php";
    </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Eliminar

if (isset($_POST["calificar"])) {
    
    $id = $_POST["id"];
    $calificacion = $_POST['calificacion'];

    $sql = "UPDATE grupo_alumnos SET calificacion=$calificacion WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        
        echo'<script type="text/javascript">
    alert("Los datos se han actualizado con exito");
    window.location.href="grupoAl.php";
    </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar o Agregar calificaciones

?>

</body>
</html>
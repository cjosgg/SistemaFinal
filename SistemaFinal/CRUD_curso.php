<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD curso</title>
</head>
<body>
<?php

include_once("conexion.php");

if (isset($_POST["Registrar"])) {
    
    $id = $_POST["id"];
    $nombreCurso = $_POST["nomCurso"];
    $Nmaestro = $_POST["Nmaestro"];
    
    

    $sql = "INSERT INTO curso(nombre, id_maestro, status) VALUES ('$nombreCurso', '$Nmaestro','Activo')";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
    alert("Los datos se han guardado con exito");
    window.location.href="ListaCursos.php";
    </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-agregar

if (isset($_POST["Editar"])) {
    
    $id = $_POST["id"];
    $nombreCurso = $_POST["nomCurso"];
    $Nmaestro = $_POST["Nmaestro"];
    
    

    $sql = "UPDATE curso SET nombre='$nombreCurso', id_maestro='$Nmaestro' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {

    echo'<script type="text/javascript">
    alert("Los datos se han editado con exito");
    window.location.href="ListaCursos.php";
    </script>';
       
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar

if (isset($_POST["Eliminar"])) {
    
    $id = $_POST["id"];
    $nombreCurso = $_POST["nomCurso"];
    $Nmaestro = $_POST["Nmaestro"];
    
    

    $sql = "UPDATE curso SET status='Inactivo' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
    alert("Se ha eliminado el curso correctamente");
    window.location.href="ListaCursos.php";
    </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Eliminar
?>
</body>
</html>
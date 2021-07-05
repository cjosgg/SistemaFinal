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
        header("location: ListaCursos.php");
        echo "Curso agregado exitosamente";
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
        echo "Curso actualizado exitosamente";
        header("location: ListaCursos.php");
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
        echo "Curso eliminado exitosamente";
        header("location: ListaCursos.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}//fin-if-Editar
?>
</body>
</html>
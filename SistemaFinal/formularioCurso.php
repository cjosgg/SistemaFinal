<?php
require_once("getMaestro.php");
require_once("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormCurso</title>
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
    <form class="form-Regis" action="CRUD_curso.php"
    method="post">
        
    <h5>
			Registrar Curso
	</h5>
        <label>Id del curso</label>
        <input type="text" name="id" id="id" readonly class="controls" required>
        <label>nombre del curso</label>
        <input type="text" name="nomCurso" id="nomCurso" class="controls" required>
        <label>Asignar</label>
        <select name="Nmaestro" id="Nmaestro" class="controls" required>
        <option value="">Elegir Profesor...</option>
        <?php

            foreach ($amaestro as $value) {
                echo "<option value= '$value[0]'>$value[1] $value[2]</option>";
            }
        ?>
        </select>
        <p><a  href='listaCursos.php'> Cancelar</a></p>
        <button class="buttons" type="submit" name="Registrar">Guardar</button>
        
    </form>
</body>
</html>
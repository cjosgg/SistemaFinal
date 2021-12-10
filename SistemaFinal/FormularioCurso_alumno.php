<?php
require_once("getAlumno.php");
require_once("getCurso.php");
require_once("getPeriodo.php");
require_once("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormCurso-alumno</title>
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
</head>
<body>
    <form class="form-Regis" action="CRUD_alumnos.php"
    method="post">
        
    <h5>
			Completa tus datos
	</h5>
        
        <select required name="Nalumno" id="Nalumno" class="controls">
        <option value="">Alumno...</option>
        <?php

            foreach ($galumno as $value) {
                echo "<option value= '$value[0]'>$value[1] $value[2] $value[3]</option>";
            }
        ?>
        </select>

        <select required name="Ncurso" id="Ncurso" class="controls">
        <option value="">Seleccione su curso...</option>
        <?php

            foreach ($gcurso as $value) {
                echo "<option value= '$value[0]'>$value[1]</option>";
            }
        ?>
        </select>

        <select required name="Nperiodo" id="Nperiodo" class="controls">
        <option value="">Seleccione el periodo...</option>
        <?php

            foreach ($gperiodo as $value) {
                echo "<option value= '$value[0]'> Del $value[1]  al $value[2] </option>";
            }
        ?>
        </select>


        <button class="buttons" type="submit" name="IngresarGA">Guardar</button>
        
    </form>
</body>
</html>
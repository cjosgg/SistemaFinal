<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos_CSS/Estilos.css">
    <title>Acerca de</title>
  
    <!-- INCLUDING JQUERY-->
    <script src=
"https://code.jquery.com/jquery-3.5.1.js">
    </script>
  
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 
                'Gill Sans MT', ' Calibri', 
                'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <button type="button" class="btn btn-primary" onclick="location.href='index.php'">
  Volver
</button>
	<h2 style="text-align: center;">Acerca de</h2>
	<br>
	<h3>
		Este es un sistema sencillo de calificaciones donde el alumno podra acceder al la calificacion final de su curso correspondiente<br>
		A su vez los usuarios maestros podran acceder para ver el listado de alumnos inscritos en el curso que estaran impartiendo asi mismo podran brindarles una calificacion correspondiente.<br>
        Por su parte el administrador literalmente será el encargado de administrar los datos(crear registros, editarlos, eliminarlos) tambien sera encargado de asignar a los alumnos y maestros a sus cursos que se hayan asignado.

	</h3>
    <section>
        <h1>datos de los desarolladores </h1>
  
        <!-- TABLE CONSTRUCTION-->
        <table id='table'>
            <!-- HEADING FORMATION -->
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Contacto</th>
            </tr>
  
            <script>
                $(document).ready(function () {
  
                    // FETCHING DATA FROM JSON FILE
                    $.getJSON("desarrolladores.json", 
                            function (data) {
                        var student = '';
  
                        // ITERATING THROUGH OBJECTS
                        $.each(data, function (key, value) {
  
                            //CONSTRUCTION OF ROWS HAVING
                            // DATA FROM JSON OBJECT
                            student += '<tr>';
                            student += '<td>' + 
                                value.Nombres + '</td>';
  
                            student += '<td>' + 
                                value.Apellidos + '</td>';
  
                            student += '<td>' + 
                                value.Edad + '</td>';
  
                            student += '<td>' + 
                                value.Contacto + '</td>';
  
                            student += '</tr>';
                        });
                          
                        //INSERTING ROWS INTO TABLE 
                        $('#table').append(student);
                    });
                });
            </script>

    </section>
    
</body>
  
</html>
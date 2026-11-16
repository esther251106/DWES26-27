<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>
<body>
    <h1>Calificaciones alumnos</h1>
        <form action="guarda_calificaciones.php" method="$_POST">
            <input type="text" name="nombreAlumno" id="nombreAlumno" placeholder="Nombre Alumno">
            <input type="text" name="nota1" id="nota1" placeholder="nt">
            <input type="text" name="nota2" id="nota2" placeholder="nt">
            <input type="text" name="nota3" id="nota3" placeholder="nt">
        </form>
    <h1>Lista alumnos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>
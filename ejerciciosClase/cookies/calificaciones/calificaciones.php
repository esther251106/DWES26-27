<!-- Crear una pequeña aplicación que permita la gestión académica del módulo de DWES.
Interesa almacenar las notas de cada trimestre y mostrar un informe con las notas la
media y el nombre de los alumnos. Tambiés debe haber un botón/enlace para borrar
los datos-->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Calificación Alumnos</h1>
    <form action="guarda_calificaciones.php" method="POST">
        <input type="text" name="nombreAlumno" id="nombreAlumno" placeholder="Nombre Alumno">
        <input type="text" name="nota1" id="nota1" placeholder="nt">
        <input type="text" name="nota2" id="nota2" placeholder="nt">
        <input type="text" name="nota3" id="nota3" placeholder="nt">
        <button type="submit">Añadir</button>
    </form>
    <h1>Lista de alumnos</h1>
    <h1>Notas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Media</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_SESSION['alumnos'])){
                foreach ($_SESSION['alumnos'] as $alumno) { ?>
                <tr>
                    <td><?php echo $alumno['nombre']; ?></td>
                    <td><?php echo $alumno['nota1']; ?></td>
                    <td><?php echo $alumno['nota2']; ?></td>
                    <td><?php echo $alumno['nota3']; ?></td>
                    <td><?php echo $alumno['media']; ?></td>
                </tr>
                
            <?php }
            } ?>
            
        </tbody>
    </table>
    <form action="borrrar_calificaciones.php" method="POST">
        <button type="submit">Borrar Notas</button>
    </form>
</body>

</html>
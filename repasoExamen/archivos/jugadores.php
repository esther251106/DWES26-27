<?php
//abrir archivo modo lectura
$archivo = fopen("plantillas.csv", "r");

//creamos array para guardar los jugadores del atm y del bilbao
$atm = [];
$bilbao = [];

if($archivo !== false) {
// 1. Leemos la primera línea (cabecera) y la descartamos (o la guardamos si la necesitas)    fgetcsv($archivo,1000,",");
    $cabecera = fgetcsv($archivo,1000,","); 
    //leemos primera linea d datos
    $linea = fgetcsv($archivo,1000,","); 

    //mientras haya linea
    while ($linea !== false) {
        if($linea[1] ==="Atlético de Madrid") { //guardamos los jugadores donde corresponden
            $atm[] = $linea;
        } else {
            $bilbao[] = $linea;
        }
        //leemos la siguiente linea para q el bucle avance
        $linea = fgetcsv($archivo,1000,",");

    }
    //cerramos archivpo
    fclose($archivo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jugadores</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <div class="contenedor">
    <h1>Plantilla Atm</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Temporada</th>
                <tr>Equipo</tr>
                <th>Apodo</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Posición</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            //recorremos arrar d atm
            foreach ($atm as $jugador) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($jugador[0]) . "</td>"; //temporada
                echo "<td>" . htmlspecialchars($jugador[1]) . "</td>"; // Equipo
                echo "<td>" . htmlspecialchars($jugador[3]) . "</td>"; // Apodo
                echo "<td>" . htmlspecialchars($jugador[4]) . "</td>"; // Nombre
                echo "<td>" . htmlspecialchars($jugador[5]) . "</td>"; // Apellidos
                echo "<td>" . htmlspecialchars($jugador[7]) . "</td>"; // Edad
                echo "<td>" . htmlspecialchars($jugador[10]) . "</td>"; // Posicion
                echo "</tr>"; // Ojo, aquí va un echo "</tr>";
            } ?>
        </tbody>
    </table>

    <h1>Plantilla Bilbao</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Temporada</th>
                <tr>Equipo</tr>
                <th>Apodo</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Posición</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            //recorremos arrar d atm
            foreach ($bilbao as $jugador) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($jugador[0]) . "</td>"; //temporada
                echo "<td>" . htmlspecialchars($jugador[1]) . "</td>"; // Equipo
                echo "<td>" . htmlspecialchars($jugador[3]) . "</td>"; // Apodo
                echo "<td>" . htmlspecialchars($jugador[4]) . "</td>"; // Nombre
                echo "<td>" . htmlspecialchars($jugador[5]) . "</td>"; // Apellidos
                echo "<td>" . htmlspecialchars($jugador[7]) . "</td>"; // Edad
                echo "<td>" . htmlspecialchars($jugador[10]) . "</td>"; // Posicion
                echo "</tr>"; // Ojo, aquí va un echo "</tr>";
            } ?>
        </tbody>
    </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Casas rurales</title>
</head>
<!--Crea un programa llamado `CasasRuralesTelefonos.php` que cargue los datos de este archivo CSV de casas
 rurales de la provincia de Castellón.
Queremos quedarnos con el id, localidad, nombre y telefono de las casas rurales que tengan un teléfono
 definido, descartando el resto.
El programa debe mostrar por pantalla el listado final procesado, y cuántas casas rurales se han 
descartado por tener datos nulos. -->
<body>
    <div class="card">
        <h1>Casas rurales</h1>
        <?php 
            // variable para guardar el csv
            $archivoCsv = 'csv/casas_rurales.csv';
            //creamos array donde guardaremos los datos de las casas que SÍ tengan tlf
            $casasValidas = [];
            //contador de casas que NO tienen tlf
            $descartadas = 0;

            // intentamos abrir el archivo en modo lectura
            if (($gestor = fopen($archivoCsv, 'r')) !== FALSE) {

                // fgetcsv-> lee una línea entera del archivo CSV y la convierte automáticamente en un array de PHP.
                //1000 es el nº máx de caracteres que puede leer x linea y el ";" como están separados
                $cabecera = fgetcsv($gestor, 1000, ';');

                //leer archivo fila x fila
                while (($fila = fgetcsv($gestor, 1000, ';')) !== FALSE) {
                    //comprueba la columna 9 si existe o no
                    if (isset($fila[9]) && trim($fila[9]) !== '') {
                        $casasValidas[] = [
                            'id'        => $fila[0],
                            'localidad' => $fila[1],
                            'nombre'    => $fila[3],
                            'telefono'  => $fila[9]
                        ];
                    } else {
                        //si no existe le sumamos al contador
                        $descartadas++;
                    }
                }
                // cerramos la conexión con el archivo
                fclose($gestor);
            } else {
                echo "No se ha podido abrir el archivo.";
            }
            echo "<p> Casas descartadas: " . $descartadas ."</p>";
        ?>
        <!-- <ul>
            <?php foreach ($casasValidas as $casa): ?>
                <li>
                    <strong><?= htmlspecialchars($casa['nombre']) ?></strong> 
                    (<?= htmlspecialchars($casa['localidad']) ?>) - 
                    Teléfono: <?= htmlspecialchars($casa['telefono']) ?>
                </li>
            <?php endforeach; ?>
        </ul>-->
    </div>
</body>
</html>
<?php
$carpeta = 'img/';

// 1. Escaneamos la carpeta con scandir()
$archivos = scandir($carpeta);

echo "<h2>Listado de imágenes subidas</h2>";

// 2. Recorremos el array con un bucle foreach
foreach ($archivos as $archivo) {
    // 3. Filtramos para ignorar el '.' y '..' y asegurarnos de que no son carpetas
    if ($archivo !== '.' && $archivo !== '..') {
        $rutaCompleta = $carpeta . $archivo;
        
        // Mostramos el nombre y la miniatura de cada imagen
        echo "<div style='margin-bottom: 20px;'>";
        echo "<p><strong>Nombre:</strong> " . $archivo . "</p>";
        echo "<img src='" . $rutaCompleta . "' alt='" . $archivo . "' width='200px'>";
        echo "</div><hr>";
    }
}
?>
<br>
<a href="subidaImagenes.html" class="btn btn-primary">Volver al formulario</a>
<?php
$tipoMime = $_FILES['imagen']['type'];
$tiposPermitidosImg = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];

if (in_array($tipoMime, $tiposPermitidosImg)) {
    // 1. Definimos la ruta absoluta usando la carpeta actual (__DIR__)
    $nombreArchivo = basename($_FILES['imagen']['name']);
    $rutaDestinoServidor = __DIR__ . '/img/' . $nombreArchivo;
    $rutaParaHtml = 'img/' . $nombreArchivo;

    // 2. Intentamos mover el archivo y comprobamos si realmente se ha movido
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestinoServidor)) {
        
        // 3. Mostramos la imagen y sus datos
        echo "<br>Nombre: " . $nombreArchivo;
        echo "<br>Ruta: " . $rutaParaHtml;
        echo "<br><img src='" . $rutaParaHtml . "' alt='Imagen subida' width='300px'><br>";
        
        $dimensiones = getimagesize($rutaDestinoServidor);
        echo "Dimensiones: " . $dimensiones[0] . "px x " . $dimensiones[1] . "px";
        

    } else {
        echo "Error: No se ha podido mover el archivo al servidor.";
    }

} else {
    echo "Tipo de archivo no permitido, vuelve a subirlo"; ?>
    <meta http-equiv="refresh" content="5;url=subidaImagenes.html">
<?php
}
?>
<meta http-equiv="refresh" content="5;url=subidaImagenes.html">
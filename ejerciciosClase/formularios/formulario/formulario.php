<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen del Formulario</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title mb-0">Tabla-Resumen de Datos Recibidos</h3>
                </div>
                <div class="card-body">
                    <?php
                        // Recogemos los campos sencillos de texto o selección única de forma segura
                        $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'No indicado';
                        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'No indicado';
                        $url = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '';
                        $sexo = isset($_POST['sexo']) ? htmlspecialchars($_POST['sexo']) : 'No indicado';
                        $convivientes = isset($_POST['convivientes']) ? htmlspecialchars($_POST['convivientes']) : 'No indicado';
                    ?>

                    <table class="table table-striped table-bordered">
                        <tr>
                            <th style="width: 35%;">Nombre y apellidos</th>
                            <td><?= $nombre ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $email ?></td>
                        </tr>
                        <tr>
                            <th>URL página personal</th>
                            <td>
                                <?php if (!empty($url)): ?>
                                    <a href="<?= $url ?>" target="_blank"><?= $url ?></a>
                                <?php else: ?>
                                    <span>No proporcionada</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Sexo</th>
                            <td><?= $sexo ?></td>
                        </tr>
                        <tr>
                            <th>Número de convivientes</th>
                            <td><?= $convivientes ?></td>
                        </tr>
                        <tr>
                            <th>Aficiones</th>
                            <td>
                                <?php
                                    // Comprobamos si se han marcado checkboxes (vienen en un array)
                                    if (isset($_POST['aficiones']) && is_array($_POST['aficiones'])) {
                                        // Limpiamos cada elemento con htmlspecialchars y los unimos con comas
                                        $aficionesLimpias = array_map('htmlspecialchars', $_POST['aficiones']);
                                        echo implode(', ', $aficionesLimpias);
                                    } else {
                                        echo "Ninguna afición seleccionada";
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Menú favorito</th>
                            <td>
                                <?php
                                    // Comprobamos si se han seleccionado opciones del select múltiple (vienen en un array)
                                    if (isset($_POST['menu']) && is_array($_POST['menu'])) {
                                        $menuLimpio = array_map('htmlspecialchars', $_POST['menu']);
                                        echo implode(', ', $menuLimpio);
                                    } else {
                                        echo "Ningún menú seleccionado";
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>

                    <a href="formulario.html" class="btn btn-secondary w-100 mt-3">Rellenar otro formulario</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
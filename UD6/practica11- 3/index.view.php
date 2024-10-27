<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Ejercicio 1 UT4</title>
</head>
<body>
    <h1>Buscar canciones</h1>

    <?php
    require_once 'ISelectorIndividual.php';
    require_once 'SelectorIndividual.php';
    require_once 'SIRadioOpcion.php';
    require_once 'SISelect.php';

    // Crear opciones para los radio buttons
    $opcionesRadio = [
        "titulo" => "Título de canción",
        "album" => "Nombre del álbum",
        "ambos" => "Ambos"
    ];
    $radioCampoBuscar = new SIRadioOpcion("Buscar en:", "campoBuscar", $opcionesRadio, 0);

    // Crear opciones para el select de géneros
    $opcionesGenero = [
        "todos" => "Todos",
        "blues" => "Blues",
        "jazz" => "Jazz",
        "pop" => "Pop",
        "rock" => "Rock"
    ];
    $selectGenero = new SISelect("Género musical:", "genero", $opcionesGenero, 0);
    ?>

    <!-- Formulario -->
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <!-- Campo de texto para buscar una canción o álbum -->
        <label for="texto">Texto a buscar:</label>
        <input type="text" name="texto"><br>

        <!-- Campo de opciones de radio generado dinámicamente -->
        <?= $radioCampoBuscar->generaSelector(); ?>

        <!-- Campo de selección generado dinámicamente -->
        <?= $selectGenero->generaSelector(); ?>

        <!-- Botón de envío -->
        <input type="submit" value="Buscar">
    </form>
</body>
</html>

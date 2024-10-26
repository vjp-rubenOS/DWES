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

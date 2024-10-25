<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar canciones</title>
</head>
<body>
    <h1>Buscar canciones</h1>

    <?php
    // Incluimos las clases de selectores que hemos creado
    require_once 'SIRadioOpcion.php';
    require_once 'SISelect.php';

    // Creamos los objetos de los selectores usando las clases
    $campoBuscarRadio = new SIRadioOpcion("Buscar en:", "campoBuscar");
    $generoSelect = new SISelect("Género musical:", "genero");
    ?>

    <!-- Formulario -->
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <!-- Campo de texto para buscar una canción o álbum -->
        <label for="texto">Texto a buscar:</label>
        <input type="text" name="texto"><br>

        <!-- Mostrar los botones de radio generados -->
        <?= $campoBuscarRadio->generaSelector(); ?>

        <!-- Mostrar el menú desplegable generado -->
        <?= $generoSelect->generaSelector(); ?>

        <!-- Botón para enviar -->
        <input type="submit" value="Buscar">
    </form>
</body>
</html>

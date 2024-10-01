<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Ejercicio 3 POST</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha">
        <label for="dias">Numero de dias:</label>
        <input type="number" name="dias" value="">
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'La fecha seleccionada es: ' . $_POST['fecha'] . '<br>';
        echo 'Dias ingresados: ' . $_POST['dias'] . '<br>';
        // Crear un objeto DateTime a partir de la fecha ingresada
        // guardarlo en variable
        $fecha = new DateTime($_POST['fecha']);

        // Modificar la fecha agregando los días ingresados
        $fecha->modify('+' . $_POST['dias'] . ' days');

        echo "La fecha resultante es: " . $fecha->format('Y-m-d');
    }

    ?>

</body>

</html>
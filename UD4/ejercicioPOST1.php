<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Ejercicio 1 POST</title>
</head>
<body>
    <form action="<?=  $_SERVER['PHP_SELF']; ?>" method="POST">
        <select name="zonaHoraria" id="zonaHoraria">
            <option value="Europe/Madrid">Madrid</option>
            <option value="Europe/London">Londres</option>
            <option value="Europe/Rome">Roma</option>
            <option value="Europe/Paris">París</option>
            
        </select>
        <input type="submit" name="submit" value="Mostrar Fecha y Hora">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            date_default_timezone_set($_POST['zonaHoraria']);
            echo 'La fecha es: ' . date('d-m-Y') . ' La hora es: ' . date('H:i:s') . ' La zona horaria es: ' . $_POST['zonaHoraria'];
        }
    ?>
</body>
</html>
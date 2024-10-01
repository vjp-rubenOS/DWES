<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Ejercicio 2 POST</title>
</head>
<body>
    <form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
</body>
<label for="frase" >Ingrese una frase:</label>
<input type="text" name="frase" value="">
<label for="palabra">Buscar palabra</label>
<input type="text" name="palabra" value="">
<input type="submit" value="Comprobar">
</form>
<?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo 'La frase: ' . $_POST['frase'].'<br>';
        
            // Verificamos si la palabra está presente en la frase
            if (stripos($_POST['frase'], $_POST['palabra']) !== false) {
                echo " La frase contiene " . $_POST['palabra'];
            } else {
                echo " La frase NO contiene " . $_POST['palabra'];
            }
        }

        
           
    ?>

  
</html>
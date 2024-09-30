<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST" >
      <label for="fecha">Fecha de nacimiento:</label>
      <input type="date" name="fecha" value=""><br>
        <label for="email" >Email</label>
        <input type="email" name="email" value =""><br>
        <label for="observaciones">Observaciones</label><br>
        <textarea name="observaciones" id="observaciones"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo ' fecha de nacimiento ' .($_POST['fecha']?? 'xx').' Email ' . ($_POST['email']).' Observaciones'  . ($_POST['observaciones']);
        }
           
    ?>
</body>
</html>



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
    <!-- Este es el formulario que debemos rellenar -->
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <!-- Campo de texto para buscar una canción o álbum -->
        <label for="texto">Texto a buscar:</label>
        <input type="text" name="texto"><br>

        <!-- elegir el titulo,album o los dos -->
        <label>Buscar en:</label>
        <input type="radio" name="campoBuscar" value="titulo" checked> Título de canción
        <input type="radio" name="campoBuscar" value="album"> Nombre del álbum
        <input type="radio" name="campoBuscar" value="ambos"> Ambos<br>

        <!-- Aqui se elige el genero,  por defecto viene "todos"-->
        <label for="genero">Género musical:</label>
        <select name="genero">
            <option value="todos">Todos</option>
            <option value="blues">Blues</option>
            <option value="jazz">Jazz</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
        </select><br>

        <!-- Boton para enviarlo -->
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
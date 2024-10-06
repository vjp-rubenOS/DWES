<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Buscar canciones</title>
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
        <input type="radio" name="campo_busqueda" value="titulo" checked> Título de canción
        <input type="radio" name="campo_busqueda" value="album"> Nombre del álbum
        <input type="radio" name="campo_busqueda" value="ambos"> Ambos<br>

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

    <?php

    // el requiere_once se utiliza para hacer referencia a otro archivo y poder utilizar lo que hay dentro como la funcion obtenerCanciones() que tiene un array
    require_once 'canciones.inc.php';

    // Llamada a la funcion que esta en el archivo canciones.inc.php
    $canciones = obtenerCanciones();

    // Comprueba que el formulario fue enviado despues de pulsar el boton
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // En esta variable se guarda el texto escrito , se pasa a minuscula para que se mas facil de buscar, se usa el trim para quitar espacios al principio y al final
        //y se utiliza el htmlspecialchars "escapa" los caracters especiales 
        $texto_busqueda = strtolower(trim(htmlspecialchars($_POST['texto'])));

        // Almacena el campo de búsqueda seleccionado (titulo,album o ambos)
        $campo_busqueda = $_POST['campo_busqueda'];

        //En esta variable se guarda el genero del menu desplegable
        $genero = $_POST['genero'];


        // Creamos un array vacio para guardar las canciones que coincidan con la busqueda 
        $resultado = [];


        // recorremos el array de las canciones para ver si alguna coincide con los criterios de busqueda
        foreach ($canciones as $cancion) {

            // Comprueba el genero de la cancion o si se eligio "todos" ( que esta por defecto)
            $coincideGenero = ($genero == 'todos' || strtolower($cancion['genero']) == $genero);


            // Inicializamos la variable a false y si coincide con algun campo la pasaremos a true
            $coincideTexto = false;

            // Compureba que el texto escrito coincida con algun titulo 
            if ($campo_busqueda == 'titulo' && strpos(strtolower($cancion['titulo']), $texto_busqueda) !== false) {
                $coincideTexto = true;
            }


            // Comprueba que el texto escrito coincida con algun album
            if ($campo_busqueda == 'album' && strpos(strtolower($cancion['album']), $texto_busqueda) !== false) {
                $coincideTexto = true;
            }


            // Comprueba que el texto escrito esta en alguno de los dos campos 
            if (
                $campo_busqueda == 'ambos' &&
                (strpos(strtolower($cancion['titulo']), $texto_busqueda) !== false ||
                    strpos(strtolower($cancion['album']), $texto_busqueda) !== false)
            ) {
                $coincideTexto = true;
            }


            // Si coincide el genero y el texto con alguno de los apartados dicho antes se añade la cancion al array 
            if ($coincideGenero && $coincideTexto) {

                $resultado[] = $cancion;
            }
        }

        // Si hay coincidencia en las canciones las muestra 
        if (!empty($resultado)) {
            //Con echo mostramos una tabla con el titulo,album y genero 
            echo "<table border='1'>
                    <tr>
                        <th>Título</th>
                        <th>Álbum</th>
                        <th>Género</th>
                    </tr>";

            // Recorremos el array , con las canciones que coincidieron con la busqueda y las muestra
            foreach ($resultado as $cancion) {
                echo "<tr>
                        <td>{$cancion['titulo']}</td>
                        <td>{$cancion['album']}</td>
                        <td>{$cancion['genero']}</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            // Si no hay resultados, muestra un mensaje indicando que no se encontraron canciones
            echo "No se encontraron canciones.";
        }
    }
    ?>

</body>

</html>
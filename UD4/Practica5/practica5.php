<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Buscar canciones</title>
</head>

<body>
    <h1>Buscar canciones</h1>

    <!-- Formulario para ingresar datos -->
    <form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <!-- Campo de texto para buscar una canción o álbum -->
        <label for="texto">Texto a buscar:</label>
        <input type="text" name="texto"><br>

        <!-- Opciones de búsqueda para elegir si se busca en el título, en el álbum o en ambos -->
        <label>Buscar en:</label>
        <input type="radio" name="campo_busqueda" value="titulo" checked> Título de canción
        <input type="radio" name="campo_busqueda" value="album"> Nombre del álbum
        <input type="radio" name="campo_busqueda" value="ambos"> Ambos<br>

        <!-- Selección del género musical. El usuario puede filtrar por género específico o dejarlo en "Todos" -->
        <label for="genero">Género musical:</label>
        <select name="genero">
            <option value="todos">Todos</option> <!-- Selecciona todos los géneros por defecto -->
            <option value="blues">Blues</option>
            <option value="jazz">Jazz</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
        </select><br>

        <!-- Botón para enviar el formulario y ejecutar la búsqueda -->
        <input type="submit" value="Buscar">
    </form>

    <?php
    // Incluye un archivo externo que tiene la función obtenerCanciones(), que devuelve un array con las canciones
    require_once 'canciones.inc.php';

    // Llama a la función obtenerCanciones para obtener el array de canciones
    $canciones = obtenerCanciones();

    // Verifica si el formulario fue enviado (si el usuario hizo clic en "Buscar")
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Guarda el texto ingresado por el usuario, lo pasa a minúsculas y elimina espacios al principio y final
        $texto_busqueda = strtolower(trim($_POST['texto']));

        // Almacena el campo de búsqueda seleccionado (título, álbum o ambos)
        $campo_busqueda = $_POST['campo_busqueda'];

        // Almacena el género seleccionado en el menú desplegable
        $genero = $_POST['genero'];

        // Inicializa un array vacío para almacenar las canciones que coincidan con la búsqueda
        $resultado = [];

        // Recorre cada canción del array para verificar si coincide con los criterios de búsqueda
        foreach ($canciones as $cancion) {
            // Verifica si el género de la canción coincide o si se seleccionó "Todos"
            $coincideGenero = ($genero == 'todos' || strtolower($cancion['genero']) == $genero);

            // Inicializa la variable para saber si el texto buscado coincide con algún campo
            $coincideTexto = false;

            // Si se busca solo en el título, verifica si el texto está dentro del título
            if ($campo_busqueda == 'titulo' && strpos(strtolower($cancion['titulo']), $texto_busqueda) !== false) {
                $coincideTexto = true;
            }

            // Si se busca solo en el álbum, verifica si el texto está dentro del nombre del álbum
            if ($campo_busqueda == 'album' && strpos(strtolower($cancion['album']), $texto_busqueda) !== false) {
                $coincideTexto = true;
            }

            // Si se busca en ambos (título y álbum), verifica si el texto está en alguno de los dos campos
            if ($campo_busqueda == 'ambos' && 
               (strpos(strtolower($cancion['titulo']), $texto_busqueda) !== false || 
                strpos(strtolower($cancion['album']), $texto_busqueda) !== false)) {
                $coincideTexto = true;
            }

            // Si el género coincide y el texto coincide, añade la canción al array de resultados
            if ($coincideGenero && $coincideTexto) {
                $resultado[] = $cancion;
            }
        }

        // Si hay canciones que coinciden, las muestra en una tabla
        if (!empty($resultado)) {
            // Crea una tabla para mostrar las canciones encontradas
            echo "<table border='1'>
                    <tr>
                        <th>Título</th>
                        <th>Álbum</th>
                        <th>Género</th>
                    </tr>";
            // Recorre cada canción que coincidió con la búsqueda y la muestra en una fila de la tabla
            foreach ($resultado as $cancion) {
                echo "<tr>
                        <td>{$cancion['titulo']}</td>
                        <td>{$cancion['album']}</td>
                        <td>{$cancion['genero']}</td>
                      </tr>";
            }
            // Cierra la tabla
            echo "</table>";
        } else {
            // Si no hay resultados, muestra un mensaje indicando que no se encontraron canciones
            echo "No se encontraron canciones.";
        }
    }
    ?>

</body>

</html>

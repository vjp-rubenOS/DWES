<?php
    // El require se utiliza para vincular unos archivos a otros, con este llamamos al formulario  que se debe rellenar
    require 'formulario.php';

    // Este otro require se utiliza para obtener la funcion que tiene el array de las canciones
    require 'canciones.inc.php';

    // Llamada a la funcion que esta en el archivo canciones.inc.php
    $canciones = sacarCanciones();

    // Comprueba que el formulario fue enviado despues de pulsar el boton
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // En esta variable se guarda el texto escrito , se pasa a minuscula para que se mas facil de buscar, se usa el trim para quitar espacios al principio y al final
        //y se utiliza el htmlspecialchars "escapa" los caracters especiales 
        $texto_buscar = strtolower(trim(htmlspecialchars($_POST['texto'])));

        // Almacena el campo de búsqueda seleccionado (titulo,album o ambos)
        $campoBuscar = $_POST['campoBuscar'];

        //En esta variable se guarda el genero del menu desplegable
        $genero = $_POST['genero'];


        // Creamos un array vacio para guardar las canciones que coincidan con la busqueda 
        $encontradas = [];


        // recorremos el array de las canciones para ver si alguna coincide con los criterios de busqueda
        foreach ($canciones as $cancion) {

            // Comprueba el genero de la cancion o si se eligio "todos" ( que esta por defecto)
            $coincidirGenero = ($genero == 'todos' || strtolower($cancion['genero']) == $genero);


            // Inicializamos la variable a false y si coincide con algun campo la pasaremos a true
            $coincidirTexto = false;

            // Compureba que el texto escrito coincida con algun titulo 
            if ($campoBuscar == 'titulo' && strpos(strtolower($cancion['titulo']), $texto_buscar) !== false) {
                $coincidirTexto = true;
            }


            // Comprueba que el texto escrito coincida con algun album
            if ($campoBuscar == 'album' && strpos(strtolower($cancion['album']), $texto_buscar) !== false) {
                $coincidirTexto = true;
            }


            // Comprueba que el texto escrito esta en alguno de los dos campos 
            if (
                $campoBuscar == 'ambos' &&
                (strpos(strtolower($cancion['titulo']), $texto_buscar) !== false ||
                    strpos(strtolower($cancion['album']), $texto_buscar) !== false)
            ) {
                $coincidirTexto = true;
            }


            // Si coincide el genero y el texto con alguno de los apartados dicho antes se añade la cancion al array 
            if ($coincidirGenero && $coincidirTexto) {

                $encontradas[] = $cancion;
            }
        }

        // Si hay coincidencia en las canciones las muestra 
        if (!empty($encontradas)) {
            //Con echo mostramos una tabla con el titulo,album y genero 
            echo "<table border='1'>
                    <tr>
                        <th>Título</th>
                        <th>Álbum</th>
                        <th>Género</th>
                    </tr>";

            // Recorremos el array , con las canciones que coincidieron con la busqueda y las muestra
            foreach ($encontradas as $cancion) {
                echo "<tr>
                        <td>$cancion[titulo]</td>
                        <td>$cancion[album]</td>
                        <td>$cancion[genero]</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            // Si no hay resultados, muestra un mensaje indicando que no se encontraron canciones
            echo "No se encontraron canciones.";
        }
    }
    
    ?>
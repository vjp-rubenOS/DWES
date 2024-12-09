<?php
// Incluimos el archivo de conexión con la base de datos
include "db.php";

// Obtenemos el valor del id para poder editarlo 
$id = $_GET['id'];

// Ejecutamos la consulta para obtener el contacto con ese id  
$result = $conn->query("SELECT * FROM Contactos WHERE id = $id");

// Recuperamos los resultados de la consulta y los asignamos a la variable $contacto.
// Esto devuelve un array asociativo con los datos del contacto seleccionado.
$contacto = $result->fetch_assoc();

// Comprobamos si el formulario ha sido enviado por metodo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Recogemos los valores enviados desde el formulario.
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono']; 

    // Preparamos la consulta SQL para actualizar los datos del contacto en la base de datos.
    $sql = "UPDATE Contactos SET nombre = ?, telefono = ? WHERE id = ?";// volvemos a utilizar ? para evitar la inyeccion SQL

    // Preparamos la declaración SQL 
    $stmt = $conn->prepare($sql);
    
    // Vinculamos los parámetros del formulario con los valores
    $stmt->bind_param("ssi", $nombre, $telefono, $id); //ssi (string,string,entero)
    
    // Ejecutamos la consulta para actualizar el contacto.
    $stmt->execute();

    // Redirigimos a la pagina principal
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Ruben Ortega Serradilla">
    <title>Editar Contacto</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Agenda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Lista de contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agregar.php">Agregar datos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <h1 class="text-center mb-4">Editar Contacto</h1>
    <form method="POST" class="card p-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $contacto['nombre'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $contacto['telefono'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

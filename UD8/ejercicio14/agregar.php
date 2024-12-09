<?php
// Incluimos el archivo de conexión con la base de datos
include "db.php";

// Comprobamos si el formulario ha sido enviado por metodo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Obtenemos los datos del formulario
    $nombre = $_POST['nombre']; 
    $telefono = $_POST['telefono']; 

    // Preparamos la consulta SQL para insertar los datos en la tabla Contactos
    $sql = "INSERT INTO Contactos (nombre, telefono) VALUES (?, ?)";//Usamos ? para evitar inyecciones SQL

    // Preparamos la consulta para ejecutar en la base de datos
    $stmt = $conn->prepare($sql);
    
    // Vinculamos los parámetros con los valores del formulario
    $stmt->bind_param("ss", $nombre, $telefono); // "ss" indica que son cadenas (string)
    
    // Ejecutamos la consulta
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
    <title>Agregar Contacto</title>
  
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
                    <a class="nav-link active" href="agregar.php">Agregar datos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <h1 class="text-center mb-4">Agregar Nuevo Contacto</h1>
  
    <form method="POST" class="card p-4">
      
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
   
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
       
        <button type="submit" class="btn btn-success">Guardar</button>
      
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

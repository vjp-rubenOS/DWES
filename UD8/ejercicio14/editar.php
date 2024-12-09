<?php
include "db.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM Contactos WHERE id = $id");
$contacto = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE Contactos SET nombre = ?, telefono = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nombre, $telefono, $id);
    $stmt->execute();

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Barra de navegación -->
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

<!-- Contenedor principal -->
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

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

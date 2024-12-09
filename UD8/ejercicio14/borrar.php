<?php
// Incluimos el archivo de conexión con la base de datos
include "db.php";

// Obtenemos el id que vamos a querer eliminar
$id = $_GET['id'];

// Ejecutamos una consulta SQL para eliminar el contacto específico cuyo 'id' 
$conn->query("DELETE FROM Contactos WHERE id = $id");

// Redirigimos a la pagina principal
header("Location: index.php");
?>

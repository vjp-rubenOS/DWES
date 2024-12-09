<?php
$host = "localhost";
$user = "root";   // Usuario
$pass = "";       // Contraseña
$dbname = "Agenda"; //nombre Base de Datos

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

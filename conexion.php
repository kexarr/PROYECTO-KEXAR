<?php
// Configuración de los datos de la conexión
$user = "root";   // Nombre de usuario de la base de datos
$pass = "";       // Contraseña (vacía por defecto en XAMPP/MAMP, por ejemplo)
$host = "localhost"; // El servidor de base de datos (localhost si está en tu máquina local)
$datab = "formulario"; // El nombre de la base de datos

// Conectamos con el servidor y la base de datos
$conexion = mysqli_connect($host, $user, $pass, $datab);

// Verificamos si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error()); // Si la conexión falla, muestra el error
}
?>

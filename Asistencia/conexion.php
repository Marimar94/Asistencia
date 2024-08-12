<?php
$host = 'localhost';
$dbname = 'asistencia_db';
$username = 'root';
$password = 'erenjeager';


$conexion = new mysqli($host, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo "Conexión exitosa";
?>

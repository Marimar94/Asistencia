<?php
include './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = md5($_POST['password']);
    $rol_id = $_POST['rol_id'];

    $sql = "INSERT INTO usuarios (nombre, apellido, correo, password, rol_id) 
            VALUES ('$nombre', '$apellido', '$correo', '$password', '$rol_id')";

    if ($conexion->query($sql) === TRUE) {
        echo "Nuevo usuario registrado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>

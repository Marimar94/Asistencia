<?php
include './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $new_password = md5($_POST['password']);

    $sql = "SELECT correo FROM password_resets WHERE token='$token' AND expires_at > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $correo = $row['correo'];

        $sql = "UPDATE usuarios SET password='$new_password' WHERE correo='$correo'";
        if ($conexion->query($sql) === TRUE) {
            echo "Contraseña actualizada correctamente.";
        } else {
            echo "Error al actualizar la contraseña.";
        }

        $sql = "DELETE FROM password_resets WHERE correo='$correo'";
        $conexion->query($sql);
    } else {
        echo "Enlace de restablecimiento inválido o expirado.";
    }

    $conexion->close();
}
?>

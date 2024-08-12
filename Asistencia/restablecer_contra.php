<?php
include './conexion.php';

$token = null;

if (isset($_GET['token'])) {
    $token = $_GET['token'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['token']) && isset($_POST['password'])) {
        $token = $_POST['token'];
        $newPassword = $_POST['password'];

        $sql = "SELECT correo FROM password_resets WHERE token='$token' AND expires_at > NOW()";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            $correo = $row['correo'];

            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $sql = "UPDATE usuarios SET password='$hashedPassword' WHERE correo='$correo'";

            if ($conexion->query($sql) === TRUE) {
                echo "Contraseña restablecida exitosamente.";

                $sql = "DELETE FROM password_resets WHERE correo='$correo'";
                $conexion->query($sql);
            } else {
                echo "Error al actualizar la contraseña: " . $conexion->error;
            }
        } else {
            echo "Token inválido o expirado.";
        }
    } else {
        echo "Solicitud no válida.";
    }

    $conn->close();
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2></h2>
            <form action="restablecer_contra.php" method="post">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token ?? '', ENT_QUOTES, 'UTF-8'); ?>" required><br>

                <label for="password">Nueva Contraseña:</label>
                <input type="password" id="password" name="password" required><br>

                <button type="submit">Restablecer Contraseña</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
}
?>

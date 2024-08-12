<?php
include './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];


    $sql = "SELECT id FROM usuarios WHERE correo='$correo'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {

        $token = bin2hex(random_bytes(50));

        $sql = "INSERT INTO password_resets (correo, token, expires_at) 
                VALUES ('$correo', '$token', DATE_ADD(NOW(), INTERVAL 1 HOUR))";
        if ($conn->query($sql) === TRUE) {
           
            $restablecer_contra = "http://localhost/restablecer_contra.php?token=" . $token;
            $subject = "Restablecimiento de Contraseña";
            $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: " . $restablecer_contra;
            $headers = "From: diazgonzalez.marianayamilet@utacapulco.edu.mx";

        
            if (mail($correo, $subject, $message, $headers)) {
                echo "Enlace de restablecimiento enviado a tu correo.";
            } else {
                echo "Error al enviar el correo.";
            }
        } else {
            echo "Error al guardar el token: " . $conexion->error;
        }
    } else {
        echo "Correo no encontrado.";
    }

    $conexion->close();
}
?>

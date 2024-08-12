<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="./css/style3.css">
</head>
<body>
    <h2></h2>
    <form action="send_reset_link.php" method="post">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <button type="submit">Enviar enlace de restablecimiento</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="./img/logo.png" alt="Logo">
        </div>
        <div class="form-container">
            <h2>Control de Asistencia Escolar</h2>
            <form action="login_user.php" method="post">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required><br>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required><br>

                <button type="submit">Iniciar Sesión</button>
                
                <div class="link-container">
                    <a href="./recuperar_contra.php">¿Olvidaste tu contraseña?</a>
                </div>
                
                <div class="link-container">
                    <a href="./registro.php">¿No tienes una cuenta? Regístrate</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


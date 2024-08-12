<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2></h2>
    <form action="/registro_usuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="rol_id">Rol:</label>
        <select id="rol_id" name="rol_id" required>
            <option value="1">Administrador</option>
            <option value="2">Profesor</option>
            <option value="3">Estudiante</option>
        </select><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>

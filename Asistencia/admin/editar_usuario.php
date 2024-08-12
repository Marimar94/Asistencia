<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(#C0C0C0, #e0e0e0);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .header {
            width: 100%;
            background-color: #13357B;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            color: #fff;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-bottom: 5px solid #1E2A78;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .container {
            width: 100%;
            max-width: 800px;
            background-color: #FFFFFF;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            margin-top: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #13357B;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #13357B;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0d1a42;
        }

        .back-link {
            display: block;
            margin: 20px auto 0;
            color: #13357B;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            font-size: 16px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Editar el Usuario</h1>
    </div>
    <div class="container">
        <form action="procesar_editar_usuario.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="Nombre del Usuario" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="Apellido del Usuario" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="usuario@ejemplo.com" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Dejar en blanco para mantener la contraseña actual">

            <label for="confirm_password">Confirmar Contraseña:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Repetir contraseña">

            <input type="submit" value="Guardar Cambios">
        </form>
        <a href="./home.php" class="back-link">Volver al inicio</a>
    </div>
</body>
</html>

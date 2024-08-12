<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rol</title>
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
            background-image: url('ruta/a/tu/imagen.jpg'); /* Ajusta la ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-bottom: 5px solid #1E2A78; /* Línea decorativa en la parte inferior */
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .container {
            width: 80%;
            max-width: 600px;
            background-color: #FFFFFF;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 20px;
        }

        h2 {
            color: #13357B;
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            color: #13357B;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
            background-color: #13357B;
            color: #fff;
            border: none;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0d2a6d;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #13357B;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Editar Rol</h1>
    </div>
    <div class="container">
        <h2>Modificar Información del Rol</h2>
        <form action="editar_rol.php" method="POST">
            <div class="form-group">
                <label for="role-id">ID del Rol:</label>
                <input type="text" id="role-id" name="role_id" required>
            </div>
            <div class="form-group">
                <label for="role-name">Nombre del Rol:</label>
                <input type="text" id="role-name" name="role_name" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Actualizar Rol">
            </div>
        </form>
        <a href="./home.php" class="back-link">Volver al Inicio</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFAFA;
            background: linear-gradient(#C0C0C0, #e0e0e0);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background-color: #FFFFFF;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
        }

        h1 {
            color: #13357B;
            text-align: center;
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 10px;
            background-image: url('ruta/a/tu/imagen.jpg');
            background-size: cover;
            background-position: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #13357B;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #13357B;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 0 auto;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #0e2a5b;
            transform: scale(1.02);
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #13357B;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Actualizar Perfil</h1>
        <form action="actualizar_perfil.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="Nombre Actual" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" value="correo@ejemplo.com" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Nueva contraseña">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmar Contraseña:</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar contraseña">
            </div>
            <button type="submit">Actualizar Perfil</button>
        </form>
        <a href="./home.php" class="back-link">Volver al inicio</a>
    </div>
</body>
</html>

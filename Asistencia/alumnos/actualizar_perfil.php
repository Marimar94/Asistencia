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
            margin-top: 20px;
        }

        h1 {
            color: #13357B;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 10px;
            background-image: url('ruta/a/tu/imagen.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
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
            align-items: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: block;
            margin: 20px auto;
        }

        button:hover {
            background-color: #0e2a5b;
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
    <div class="container">
        <h1>Actualizar Perfil</h1>
        <form action="actualizar_perfil.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password" id="contraseña" name="contraseña">
            </div>
            <button type="submit">Actualizar</button>
        </form>
        <a href="./home.php" class="back-link">Volver al Inicio</a>
    </div>
</body>
</html>

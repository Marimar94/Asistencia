<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
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
        .form-group input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #13357B;
            color: #fff;
            border: none;
            padding: 15px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
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
        <h1></h1>
    </div>
    <div class="container">
        <h2>Eliminar Usuario</h2>
        <form action="eliminar_usuario.php" method="POST">
            <div class="form-group">
                <label for="email">Correo Electrónico del Usuario:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Eliminar Usuario">
            </div>
        </form>
        <a href="./home.php" class="back-link">Volver al Inicio</a>
    </div>
</body>
</html>

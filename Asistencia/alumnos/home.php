<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
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
            text-align: center;
        }

        h1 {
            color: #13357B;
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 10px;
            background-image: url('ruta/a/tu/imagen.jpg');
            background-size: cover;
            background-position: center;
        }

        .menu {
            display: flex;
            justify-content: center;
            background-color: #13357B;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .menu-item {
            background-color: #13357B;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin: 0 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .menu-item:hover {
            background-color: #0e2a5b;
            transform: scale(1.05);
        }

        .menu-item a {
            color: #fff;
            text-decoration: none;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #13357B;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido Estudiante</h1>
        <div class="menu">
            <div class="menu-item">
                <a href="./ver_historial.php">Ver Historial de Asistencia</a>
            </div>
            <div class="menu-item">
                <a href="./actualizar_perfil.php">Actualizar Perfil</a>
            </div>
        </div>
        <a href="" class="back-link">Cerrar Sesión</a>
    </div>
</body>
</html>

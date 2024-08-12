<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Historial de Asistencia</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #13357B;
            color: #fff;
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
        <h1>Historial de Asistencia</h1>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Materia</th>
                    <th>Asistencia</th>
                </tr>
            </thead>
            </tbody>
        </table>
        <a href="./home.php" class="back-link">Volver al Inicio</a>
    </div>
</body>
</html>

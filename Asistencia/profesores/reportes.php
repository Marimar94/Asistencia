<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reportes de la Clase</title>
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
            max-width: 1000px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #13357B;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
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
        <h1>Reportes de la Clase</h1>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Alumno</th>
                    <th>Asistencia</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <a href="./home.php" class="back-link">Volver al inicio</a>
    </div>
</body>
</html>

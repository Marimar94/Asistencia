<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reportes</title>
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
            color: #fff;
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
            max-width: 1200px;
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

        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .report-table th,
        .report-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .report-table th {
            background-color: #1E2A78;
            color: #fff;
        }

        .report-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-link {
            display: block;
            text-align: center;
            color: #13357B;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Ver Reportes</h1>
    </div>
    <div class="container">
        <h2>Lista de Reportes</h2>
        <table class="report-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Tipo de Reporte</th>
                    <th>Descripción</th>
                </tr>
            </thead>
        </table>
        <a href="./home.php" class="back-link">Volver al Inicio</a>
    </div>
</body>
</html>

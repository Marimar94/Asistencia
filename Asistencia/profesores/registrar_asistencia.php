<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Asistencia</title>
    <style>
 body {
            font-family: Arial, sans-serif;
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
            text-align: center;
            margin-bottom: 30px;
            padding: 15px;
            border-radius: 10px;
            background-color: #f4f4f4;
            background-image: url('ruta/a/tu/imagen.jpg');
            background-size: cover;
            background-position: center;
            font-size: 24px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #13357B;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
    background-color: #13357B;
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    display: inline-block;
    transition: background-color 0.3s ease, transform 0.2s ease;
    margin: 0 auto;
    line-height: 1.5;
}

        button:hover {
            background-color: #0e2a5b;
            transform: scale(1.05);
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #13357B;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registrar Asistencia</h1>
        <form action="procesar_asistencia.php" method="post">
            <div class="form-group">
                <label for="clase">Clase:</label>
                <select id="clase" name="clase" required>
                    <option value="">Seleccione la clase</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="estudiantes">Estudiantes Presentes:</label>
                <input type="text" id="estudiantes" name="estudiantes" placeholder="Ingrese los nombres de los estudiantes presentes separados por comas" required>
            </div>
            <button type="submit">Registrar</button>
        </form>
        <a href="./home.php" class="back-link">Volver al Inicio</a>
    </div>
</body>
</html>

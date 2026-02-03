<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de Deportes Inscritos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .total-container {
            background-color: #fff;
            padding: 40px 60px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            color: #2575fc;
            margin-bottom: 20px;
        }

        .total {
            font-size: 50px;
            font-weight: bold;
            color: #333;
        }

        p {
            margin-top: 10px;
            font-size: 18px;
            color: #555;
        }

        .btn-volver {
            display: inline-block;
            background-color: #2575fc;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-volver:hover {
            background-color: #1a59c7;
            transform: translateY(-2px); /* Pequeño efecto de elevación */
        }
    </style>
</head>
<body>

    <div class="total-container">
        <h2>Total de Deportes con Alumnos Inscritos</h2>
        <div class="total"><?php echo $datos ?></div>
        <p>deportes tienen alumnos inscritos.</p>
        <a href="index.php?c=Menu&m=cargarPaginaA" class="btn-volver">Volver al menú</a>
    </div>

</body>
</html>
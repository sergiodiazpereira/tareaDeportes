<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff4e50, #f9d423);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .error-container {
            background-color: #fff;
            padding: 50px 60px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
        }

        h1 {
            font-size: 80px;
            color: #ff4e50;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #ff4e50;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #f9d423;
            color: #333;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <div class="error-container">
        <h1>❌</h1>
        <h2>Error</h2>
        <p><?php echo $datos["mensaje"] ?></p>
        <a href=<?php echo $datos["redireccion"] ?> class="btn">Volver</a>
    </div>

</body>
</html>
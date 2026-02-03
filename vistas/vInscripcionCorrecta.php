<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éxito</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Gradiente en tonos verdes frescos */
            background: linear-gradient(135deg, #11998e, #38ef7d);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .success-container {
            background-color: #fff;
            padding: 50px 60px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            text-align: center;
            max-width: 500px;
        }

        h1 {
            font-size: 80px;
            margin-bottom: 20px;
            /* Animación suave de entrada */
            animation: pop 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        h2 {
            font-size: 28px;
            color: #2d3436;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #636e72;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #11998e;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #0d7c73;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(17, 153, 142, 0.4);
        }

        @keyframes pop {
            0% { transform: scale(0); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>

    <div class="success-container">
        <h1>✅</h1>
        <h2>Te has inscrito correctamente</h2>
        <a href="index.php?c=InicioSesion&m=cargarPagina" class="btn">Iniciar sesión</a>
    </div>

</body>
</html>
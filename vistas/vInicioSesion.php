<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
        }

        .login-container {
            background-color: #fff;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #2575fc;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn:hover {
            background-color: #6a11cb;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Inicio de Sesión</h2>
        <form action="index.php?c=Menu&m=cargarPagina" method="POST">
            <div class="form-group">
                <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
            </div>
            <button type="submit" class="btn">Iniciar Sesión</button>
        </form>
    </div>

</body>
</html>
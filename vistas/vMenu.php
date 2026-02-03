<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Usuario</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .dashboard-container {
            background-color: #fff;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #2575fc;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #6a11cb;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .button-group {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h2>Bienvenido, usuario</h2>
        
        <div class="button-group">
            <a href="index.php?c=DatosUsuarios&m=cargarPagina" class="btn">Datos de los usuarios</a>
            <a href="index.php?c=DatosDeportes&m=cargarPagina" class="btn">Datos de los deportes</a>
            <a href="index.php?c=UsuariosDeportes&m=cargarPagina" class="btn">Usuarios en deportes</a>
            <a href="index.php" class="btn">Cerrar sesión</a>
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción</title>
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

        .form-container {
            background-color: #fff;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .checkbox-group {
            margin-bottom: 20px;
        }

        .checkbox-group label {
            font-weight: normal;
            margin-right: 15px;
        }

        .checkbox-conditions {
            margin-bottom: 20px;
        }

        .btn-submit {
            display: block;
            width: 100%;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #6a11cb;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Formulario de Inscripción</h2>
        <form action="index.php?c=Inscripcion&m=envioDeDatos" method="POST">
            <!-- Nombre usuario -->
            <label for="nombreUsuario">Nombre de Usuario</label>
            <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Ej: usuario123">

            <!-- Apellidos y Nombre -->
            <label for="apeNombre">Apellidos y Nombre</label>
            <input type="text" id="apeNombre" name="apeNombre" placeholder="Ej: Pérez Juan">

            <!-- Contraseña -->
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="********">

            <!-- Correo -->
            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com">

            <!-- Teléfono -->
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Opcional">

            <!-- Deportes -->
            <label>Deportes</label>
            <div class="checkbox-group">
                <?php 
                    foreach ($datos as $deporte){
                        echo '<label><input type="checkbox" name="deportes[]" value="'.$deporte->idDeporte.'"> '.$deporte->nombreDep.'</label>';
                    }
                ?>
            </div>

            <!-- Acepto condiciones -->
            <div class="checkbox-conditions">
                <label><input type="checkbox" name="condiciones"> Acepto las condiciones</label>
            </div>

            <!-- Botón enviar -->
            <button type="submit" class="btn-submit">ENVIAR</button>
        </form>
    </div>

</body>
</html>
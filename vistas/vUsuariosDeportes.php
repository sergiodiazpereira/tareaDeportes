<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de Usuarios por Deporte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2575fc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #2575fc;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        /* Estilos para el botón añadidos */
        .contenedor-boton {
            text-align: center;
            margin-top: 30px;
        }

        .btn-volver {
            background-color: #2575fc;
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
            display: inline-block;
        }

        .btn-volver:hover {
            background-color: #1a59c7;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <h2>Total de Usuarios por Deporte</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre del Deporte</th>
                <th>Total de Usuarios</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($datos as $fila){
                    echo '<tr>
                            <td>'.$fila->nombreDep.'</td>
                            <td>'.$fila->numeroUsuarios.'</td>
                          </tr>';
                }
            ?>
        </tbody>
    </table>

    <div class="contenedor-boton">
        <a href="index.php?c=Menu&m=cargarPaginaA" class="btn-volver">Volver al menú</a>
    </div>

</body>
</html>
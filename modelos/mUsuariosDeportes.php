<?php
    require_once __DIR__.'/../config/conexion.php';
    /**
     * Este es el modelo del inicio de sesión
     */
    class MUsuariosDeportes extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function datosUsuariosDeportes(){
            $sql = 'SELECT deportes.nombreDep, COUNT(usuarios_deportes.idDeporte) AS numeroUsuarios
                    FROM deportes
                    LEFT JOIN usuarios_deportes ON deportes.idDeporte = usuarios_deportes.idDeporte
                    GROUP BY deportes.idDeporte;';
            $resultado = $this->conexion->query($sql); // NO hago consulta preparada porque no hay posibilidad de inyección
            return $resultado;
        }

    }
?>
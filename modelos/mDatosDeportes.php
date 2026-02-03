<?php
    require_once __DIR__.'/../config/conexion.php';
    /**
     * Este es el modelo del inicio de sesión
     */
    class MDatosDeportes extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function contarDeportesUsados(){
            $sql = 'SELECT COUNT(DISTINCT idDeporte) FROM usuarios_deportes;';
            $resultado = $this->conexion->query($sql);
            return $resultado->fetchColumn();
        }
    }
?>
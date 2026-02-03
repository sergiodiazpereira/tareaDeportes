<?php
    require_once __DIR__.'/../config/conexion.php';
    /**
     * Este es el modelo del inicio de sesión
     */
    class MDatosUsuarios extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function obtenerDatosU(){
            $sql = "SELECT usuarios.idUsuario, usuarios.nombreUsuario, usuarios.apeNombre, usuarios.correo, usuarios.telefono, usuarios.perfil, deportes.nombreDep
                    FROM usuarios
                    LEFT JOIN usuarios_deportes ON usuarios.idUsuario = usuarios_deportes.idUsuario
                    LEFT JOIN deportes ON deportes.idDeporte = usuarios_deportes.idDeporte";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }
    }
?>
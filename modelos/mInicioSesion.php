<?php
    require_once __DIR__.'/../config/conexion.php';
    /**
     * Este es el modelo del inicio de sesión
     */
    class MInicioSesion extends Conexion{

        function __construct(){
            parent::__construct();
            
        }
    }
?>
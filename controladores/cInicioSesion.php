<?php
    require_once __DIR__.'/../config/constantes.php';
    require_once __DIR__.'/../modelos/mInicioSesion.php';
    class CInicioSesion{
        public $modeloIniSesion;
        public $vista;
        function __construct(){
            $this->modeloIniSesion = new MInicioSesion();
        }

        /**
         * Carga la vista del inicio de la pagina.
         * 
         */
        public function cargarPagina(){
            session_start();
            $_SESSION = array();  // Limpio todas las variables del $_SESSION
            session_destroy();

            $this->vista = "vInicioSesion.php";
        }
        
    }
?>
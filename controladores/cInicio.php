<?php
    require_once __DIR__.'/../config/constantes.php';
    require_once __DIR__.'/../modelos/mInicio.php';
    class CInicio{
        public $modeloIni;
        public $vista;
        function __construct(){
            $this->modeloIni = new MInicio();
        }

        /**
         * Carga la vista del inicio de la pagina.
         * 
         */
        public function cargarPagina(){
            session_start();
            $_SESSION = array();  // Limpio todas las variables del $_SESSION
            session_destroy();

            $resultado = $this->modeloIni->buscarAdmin(); // Busco algun administrador en la BD
            if (!$resultado){
                $this->modeloIni->crearAdmin(); // Creo un usuario administrador si no existe
            }
            $this->vista = "vInicio.php";
        }   
    }
?>
<?php
    require_once __DIR__.'/../config/constantes.php';
    require_once __DIR__.'/../modelos/mDatosDeportes.php';
    class CDatosDeportes{
        public $modeloDatosD;
        public $vista;
        function __construct(){
            $this->modeloDatosD = new MDatosDeportes();
        }

        /**
         * Carga la vista del inicio de la pagina.
         * 
         */
        public function cargarPagina(){
            session_start();
            if (!isset($_SESSION["idUsuario"])){
                header("Location: index.php");
                exit(); // Para no seguir ejecutando codigo
            }
            $datos = $this->modeloDatosD->contarDeportesUsados();
            $this->vista = "vDatosDeportes.php";
            return $datos;
        }   
    }
?>
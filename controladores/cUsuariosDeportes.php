<?php
    require_once __DIR__.'/../config/constantes.php';
    require_once __DIR__.'/../modelos/mUsuariosDeportes.php';
    class CUsuariosDeportes{
        public $modeloUsuariosDeportes;
        public $vista;
        function __construct(){
            $this->modeloUsuariosDeportes = new MUsuariosDeportes();
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
            $datos = $this->modeloUsuariosDeportes->datosUsuariosDeportes();
            $this->vista = "vUsuariosDeportes.php";
            return $datos;
        }   
    }
?>
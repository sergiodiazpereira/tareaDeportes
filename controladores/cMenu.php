<?php
    require_once __DIR__.'/../config/constantes.php';
    require_once __DIR__.'/../modelos/mMenu.php';
    class CMenu{
        public $modeloMenu;
        public $vista;
        function __construct(){
            $this->modeloMenu = new MMenu();
        }

        /**
         * Carga la vista del inicio de la pagina.
         * 
         */
        public function cargarPagina(){
            try{
                if (empty($_POST["usuario"]) || strlen($_POST["usuario"]) > 30){
                    throw new Error("El nombre de usuario es demasiado largo (+30 caracteres) o inexistente");
                }
                if (empty($_POST["password"])){
                    throw new Error("Tienes que introducir la contraseña");
                }


                $usuario = $this->modeloMenu->comprobarUsuario();
                if (!$usuario){
                    throw new Error("Nombre de usuario y/o contraseña incorrectos");
                }

                
                if ($usuario->perfil == 'c'){
                    session_start();
                    $_SESSION['idUsuario'] = $usuario->idUsuario;
                    $this->vista = "vMenu.php";
                } else{
                    $this->vista = "vInicioSesionU.php";
                }
            }catch (Error $e){
                $this->datos["mensaje"] = $e->getMessage();
                $this->datos["redireccion"] = "index.php?c=InicioSesion&m=cargarPagina";
                $this->vista = "vError.php";
                return $this->datos;
            }
        }
        
        public function cargarPaginaA(){
            session_start();
            if (!isset($_SESSION["idUsuario"])){
                header("Location: index.php");
                exit(); // Para no seguir ejecutando codigo
            }
            $this->vista = "vMenu.php";
        }
    }
?>
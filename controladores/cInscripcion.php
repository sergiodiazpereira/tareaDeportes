<?php
    require_once __DIR__.'/../config/constantes.php';
    require_once __DIR__.'/../modelos/mInscripcion.php';
    class CInscripcion{
        public $modeloInscripcion;
        public $vista;
        function __construct(){
            $this->modeloInscripcion = new MInscripcion();
        }

        /**
         * Carga la vista del inicio de la pagina.
         * 
         */
        public function cargarPagina(){
            $datos = $this->modeloInscripcion->obtenerDeportes();
            $this->vista = "vInscripcion.php";
            return $datos;
        }
        
        public function envioDeDatos(){
            try{
                if (empty($_POST["nombreUsuario"]) || strlen($_POST["nombreUsuario"]) > 30){
                    throw new Error("El nombre de usuario es demasiado largo (+30 caracteres) o inexistente");
                }
                if (empty($_POST["apeNombre"]) || strlen($_POST["apeNombre"]) > 60){
                    throw new Error("Los nombres y apellidos son demasiado largos (+60 caracteres) o inexistentes");
                }
                if (empty($_POST["password"])){
                    throw new Error("Tienes que introducir la contraseña");
                }
                if (empty($_POST["correo"]) || strlen($_POST["correo"]) > 60){
                    throw new Error("El correo es demasiado largo (+60 caracteres) o inexistente");
                }
                if (!isset($_POST["deportes"])){
                    throw new Error("Tienes que marcar al menos un deporte");
                }
                if (!empty($_POST["telefono"]) && (strlen($_POST["telefono"]) != 9 || !ctype_digit($_POST["telefono"]))){ // Valida que el telefono tenga 9 numeros SOLO SI SE RELLENA EL CAMPO
                    throw new Error("No se ha introducido un telefono válido");
                }
                if (!isset($_POST["condiciones"])){
                    throw new Error("Tienes que aceptar las condiciones");
                }
                $resultadoInscripcion = $this->modeloInscripcion->inscribirUsuario();
                if (isset($resultadoInscripcion)){
                    throw new Error($resultadoInscripcion);
                }
                $this->vista = "vInscripcionCorrecta.php";
            } catch (Error $e) {
                $this->datos["mensaje"] = $e->getMessage();
                $this->datos["redireccion"] = "index.php?c=Inscripcion&m=cargarPagina";
                $this->vista = "vError.php";
                return $this->datos;
            }
        }
    }
?>
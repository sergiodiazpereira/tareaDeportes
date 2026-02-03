<?php
    require_once __DIR__.'/../config/constantes.php';
    require_once __DIR__.'/../modelos/mDatosUsuarios.php';
    class CDatosUsuarios{
        public $modeloDatosU;
        public $vista;
        function __construct(){
            $this->modeloDatosU = new MDatosUsuarios();
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
            $datosU = $this->modeloDatosU->obtenerDatosU();

            // -------------------- PREPARO LOS DATOS PARA ENVIARLOS A LA VISTA ------------------- //
            $datos = [];
            foreach ($datosU as $fila) {
                $id = $fila->idUsuario;
                
                // Si es la primera vez que se procesa este usuario, guardo sus datos
                if (!isset($datos[$id])) {
                    $datos[$id] = [
                        'nombre' => $fila->nombreUsuario,
                        'apellidos' => $fila->apeNombre,
                        'correo' => $fila->correo,
                        'telefono' => $fila->telefono,
                        'perfil' => $fila->perfil,
                        'deportes' => []
                    ];
                }
                
                // Añado el deporte al array de ese usuario
                $datos[$id]['deportes'][] = $fila->nombreDep; // El [] vacío es equivalente a hacer un push en javascript (añade el valor al array como un nuevo elemento)
            }

            // Convierto el array de deportes a un string para mostrarlo directamente en el html
            foreach ($datos as $id => $valor) {
                $datos[$id]['deportes_string'] = implode(", ", $valor['deportes']);
            }
            $this->vista = "vDatosUsuarios.php";
            return $datos;
        }   
    }
?>
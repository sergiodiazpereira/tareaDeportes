<?php
    require_once __DIR__.'/../config/conexion.php';
    /**
     * Este es el modelo del inicio
     */
    class MInicio extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function buscarAdmin(){
            $sql = "SELECT * FROM usuarios WHERE perfil = 'c'";
            $resultado = $this->conexion->query($sql); // No hago consulta preparada porque no hay posibilidad de inyeccion
            if ($resultado->rowCount() > 0){
                return true;
            }
        }

        public function crearAdmin(){
                $sql = 'INSERT INTO usuarios (nombreUsuario, apeNombre, password, correo, perfil) VALUES ("sergio", "dias", "'.password_hash("sergio123", PASSWORD_DEFAULT).'", "sergio@gmail.com", "c");';
                $this->conexion->query($sql); // No hago consulta preparada porque no hay posibilidad de inyeccion
        }
    }
?>
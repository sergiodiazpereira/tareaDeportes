<?php
    require_once __DIR__.'/../config/conexion.php';
    /**
     * Este es el modelo del inicio de sesión
     */
    class MMenu extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function comprobarUsuario(){
            $sql = "SELECT * FROM usuarios WHERE nombreUsuario = :nom";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':nom', $_POST["usuario"]);
            $stmt->execute();
            
            if ($stmt->rowCount() == 0){
                return false;
            } else{
                $usuario = $stmt->fetch();
                if (password_verify($_POST["password"], $usuario->password)){
                    return $usuario;
                }
            }
        }
    }
?>
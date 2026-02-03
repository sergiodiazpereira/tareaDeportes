<?php
    require_once __DIR__.'/../config/conexion.php';
    /**
     * Este es el modelo del inicio de sesión
     */
    class MInscripcion extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function obtenerDeportes(){
            try{
                $sql = "SELECT * FROM deportes";
                $resultado = $this->conexion->query($sql); // No hago consulta preparada porque no hay posibilidad de inyeccion
                return $resultado;
            }catch (PDOException $e){
                if ($e->getCode() == "08006"){
                    return "Se ha perdido la conexión";
                }
            }
        }

        public function inscribirUsuario(){
            try{
                $this->conexion->beginTransaction();
                if (!empty($_POST["telefono"])){
                    $sql = "INSERT INTO usuarios (nombreUsuario, apeNombre, password, correo, telefono, perfil) VALUES (:nombre, :apellidoN, :pw, :corr, :tel, 'u')";
                    $stmt = $this->conexion->prepare($sql);
                    $stmt->bindParam(':tel', $_POST["telefono"]);
                } else {
                    $sql = "INSERT INTO usuarios (nombreUsuario, apeNombre, password, correo, perfil) VALUES (:nombre, :apellidoN, :pw, :corr, 'u')";
                    $stmt = $this->conexion->prepare($sql);
                }

                $stmt->bindParam(':nombre', $_POST["nombreUsuario"]);
                $stmt->bindParam(':apellidoN', $_POST["apeNombre"]);
                $contraseñaHasheada = password_hash($_POST["password"], PASSWORD_DEFAULT);
                $stmt->bindParam(':pw', $contraseñaHasheada);
                $stmt->bindParam(':corr', $_POST["correo"]);

                $stmt->execute();
                $idUsuarioInsertado = $this->conexion->lastInsertId();

                $sql = "INSERT INTO usuarios_deportes VALUES (:idD, :idU)";
                $stmt = $this->conexion->prepare($sql);

                foreach ($_POST["deportes"] as $deporte){
                    $stmt->bindParam(":idU", $idUsuarioInsertado);
                    $stmt->bindParam(":idD", $deporte);
                    $stmt->execute();
                }

                $this->conexion->commit();
            }catch (PDOException $e){
                $this->conexion->rollBack();
                if ($e->getCode() == "23000"){
                    return "El nombre de usuario ya está cogido";
                }
                if ($e->getCode() == "08006"){
                    return "Se ha perdido la conexión";
                }
            }

        }
    }
?>
<?php
    require_once "C:/xampp/htdocs/Prueba/scrips/Conexion.php";
    require_once "GetUsuarios.php";
    
    class LoginUsuario extends Conexion{

        public function login($usuario, $contrasenia){
            $sql="SELECT * FROM USUARIOS WHERE USUARIO= :usuario AND CONTRASENIA= :contrasenia";
            $resultado=$this->conexion_db->prepare($sql);
            $resultado->bindValue(":usuario", $usuario);
            $resultado->bindValue(":contrasenia", $contrasenia);
            $resultado->execute();
            $cantidadRegistros=$resultado->rowCount();
            if($cantidadRegistros!=0){
                return true;
            }else{
                return false;
            }
        }

    }
    
?>

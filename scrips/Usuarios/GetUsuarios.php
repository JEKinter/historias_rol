<?php
    require_once "C:/xampp/htdocs/Prueba/scrips/Conexion.php";

    class GetUsuarios extends Conexion{

        private function get_all_usuarios(){
            $sql="SELECT * FROM USUARIOS";
        }

        private function get_usuario($dato){
            $sql="SELECT * FROM USUARIOS WHERE USUARIO ='" . $dato . "'";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fecthAll(PDO::FECTH_ASSOC);
            $sentencia->closeCursor();
            $this->conexion_db=null;
            return $resultado;
        }

        private function get_contrasenia_usuario($contrasenia){
            $sql="SELECT * FROM USUARIOS WHERE CONTRASEÑA ='" . $contrasenia . "'";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fecthAll(PDO::FECTH_ASSOC);
            $sentencia->closeCursor();
            $this->conexion_db=null;
            return $resultado;
        }

    }

?>

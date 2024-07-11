<?php

    // require_once("Configuracion.php");

    class Conexion{
        protected $conexion_db;

        public function __construct(){

            try {
                $this->conexion_db=new PDO("mysql:host=localhost; dbname=historias_rol", "root", "");
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexion_db->exec("SET CHARACTER SET utf8");
                return;
            } catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }
    }
?>
<?php

    class Noticias_modelo{

        private $db;
        private $noticias;

        public function __construct(){

            require_once("modelo/conectar.php");

            $this->db=conectar::conexion();

            $this->noticias=array();

        }

        public function get_noticias(){

            $consulta=$this->db->query("select * from personas");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

                $this->noticias[]=$filas;


            }

            return $this->noticias;
        }

    }


?>
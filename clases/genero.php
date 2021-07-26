<?php
    include_once("basededatos.php");
    class Genero{
        private $id;
        private $nombre;
        private $bd;

        public function __construct(){
            $this->bd = new Conectar();
            $this->bd->conecta();
        }

        //ID
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }

        //NOMBRE
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getnombre(){
            return $this->nombre;
        }   
        
        public function get_generos($id){
            $consulta = "select * from genero where id = ". $id;
            $result = $this->bd->ejecutar($consulta);
            if($result->num_rows > 0) {
                $query = $result->fetch_object();
                return $query->nombre;           } 
            else { return FALSE; }  
        } 
    }
?>